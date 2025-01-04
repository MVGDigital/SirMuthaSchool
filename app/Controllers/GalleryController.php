<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\GalleryModel;

class GalleryController extends BaseController
{
    public function index()
    {
        $galleryModel = new GalleryModel();
        $gallery = $galleryModel->findAll();
        return view('gallery_list', ['gallery' => $gallery]);
    }

    public function add()
    {
        return view('gallery_form');
    }

    public function upload()
    {
        $galleryModel = new GalleryModel();

        $validationRules = [
            'file' => 'uploaded[file]|max_size[file,20480]|ext_in[file,jpg,jpeg,png]|is_image[file]',
            'sort_order' => 'required|integer',
            'is_published' => 'permit_empty|in_list[1,0]',
            'category' => 'required',
        ];

        if (!$this->validate($validationRules)) {
            $errors = $this->validator->getErrors();
            log_message('error', 'Validation Errors: ' . json_encode($errors));
            return redirect()->back()->withInput()->with('errors', $errors);
        }

        $file = $this->request->getFile('file');
        $fileName = null;

        if ($file->isValid() && !$file->hasMoved()) {
            $imageInfo = getimagesize($file->getTempName());
            $width = $imageInfo[0];
            $height = $imageInfo[1];

            // if (!(($width === 800 && $height === 1000) || ($width === 500 && $height === 670))) {
            //     return redirect()->back()->withInput()->with('error', 'Image size must be 800x1000 or 500x670 pixels.');
            // }

            $fileName = $file->getRandomName();
            $file->move(FCPATH . 'uploads/gallery_files', $fileName);
        }

        $galleryData = [
            'file_path' => $fileName,
            'sort_order' => $this->request->getPost('sort_order'),
            'is_published' => $this->request->getPost('is_published') ? 1 : 0,
            'category' => $this->request->getPost('category'),
        ];

        $galleryModel->save($galleryData);
        return redirect()->to(base_url('adm1n/gallery'))->with('success', 'File uploaded successfully!');
    }

    public function edit($id)
    {
        $galleryModel = new GalleryModel();
        $item = $galleryModel->find($id);
        if (!$item) {
            log_message('error', 'Gallery item not found with ID: ' . $id);
            return redirect()->to(base_url('adm1n/gallery'))->with('error', 'Gallery item not found');
        }
        return view('gallery_form', ['item' => $item]);
    }

    public function update($id)
    {
        $galleryModel = new GalleryModel();
        $item = $galleryModel->find($id);

        if (!$item) {
            log_message('error', 'Gallery item not found with ID: ' . $id);
            return redirect()->to(base_url('adm1n/gallery'))->with('error', 'Gallery item not found');
        }

        $validationRules = [
            'file' => 'max_size[file,20480]|ext_in[file,jpg,jpeg,png]|is_image[file]',
            'sort_order' => 'required|integer',
            'is_published' => 'permit_empty|in_list[1,0]',
            'category' => 'required',
        ];

        if (!$this->validate($validationRules)) {
            $errors = $this->validator->getErrors();
            foreach ($errors as $field => $error) {
                log_message('error', "Validation failed for $field: $error");
            }
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $file = $this->request->getFile('file');
        $fileName = $item['file_path'];

        if ($file && $file->isValid() && !$file->hasMoved()) {
            $imageInfo = getimagesize($file->getTempName());
            $width = $imageInfo[0];
            $height = $imageInfo[1];

            // if (!(($width === 800 && $height === 1000) || ($width === 500 && $height === 670))) {
            //     log_message('error', 'Invalid image size. Expected 800x1000 pixels.');
            //     return redirect()->back()->withInput()->with('error', 'Image size must be 800x1000 pixels.');
            // }

            if (file_exists(FCPATH . 'uploads/gallery_files/' . $fileName)) {
                unlink(FCPATH . 'uploads/gallery_files/' . $fileName);
            }
            $fileName = $file->getRandomName();
            $file->move(FCPATH . 'uploads/gallery_files', $fileName);
        }

        $galleryData = [
            'file_path' => $fileName,
            'sort_order' => $this->request->getPost('sort_order'),
            'is_published' => $this->request->getPost('is_published') ? 1 : 0,
            'category' => $this->request->getPost('category'),
        ];

        $galleryModel->update($id, $galleryData);
        return redirect()->to(base_url('adm1n/gallery'))->with('success', 'File updated successfully!');
    }

    public function delete($id)
    {
        $galleryModel = new GalleryModel();
        $item = $galleryModel->find($id);

        if ($item) {
            if (file_exists(FCPATH . 'uploads/gallery_files/' . $item['file_path'])) {
                unlink(FCPATH . 'uploads/gallery_files/' . $item['file_path']);
            }
            $galleryModel->delete($id);
            return redirect()->to(base_url('adm1n/gallery'))->with('success', 'File deleted successfully!');
        }

        return redirect()->to(base_url('adm1n/gallery'))->with('error', 'Gallery item not found');
    }

    public function toggleStatus($id)
    {
        $galleryModel = new GalleryModel();
        $item = $galleryModel->find($id);

        if ($item) {
            $updatedStatus = !$item['is_published'];
            $galleryModel->update($id, ['is_published' => $updatedStatus]);

            return $this->response->setJSON([
                'status' => 'success',
                'message' => 'Gallery item status updated',
                'is_published' => $updatedStatus
            ]);
        } else {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'Gallery item not found'
            ]);
        }
    }
}