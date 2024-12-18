<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\BannerModel;

class BannerController extends BaseController
{
    public function index()
    {
        $bannerModel = new BannerModel();
        $banners = $bannerModel->findAll();
        return view('banner_list', ['banners' => $banners]);
    }

    public function add()
    {
        return view('banner_form');
    }

    public function upload()
    {
        $bannerModel = new BannerModel();
    
        $validationRules = [
            'page' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'The Page field is required.',
                ],
            ],
            'title' => [
                'rules' => 'required|max_length[255]',
                'errors' => [
                    'required' => 'The Title field is required.',
                    'max_length' => 'The Title cannot exceed 255 characters.',
                ],
            ],
            'caption' => [
                'rules' => 'permit_empty|max_length[1000]',
                'errors' => [
                    'max_length' => 'The Caption cannot exceed 1000 characters.',
                ],
            ],
            'hyperlink' => [
                'rules' => 'permit_empty|valid_url|max_length[255]',
                'errors' => [
                    'valid_url' => 'Please provide a valid URL.',
                    'max_length' => 'The Hyperlink cannot exceed 255 characters.',
                ],
            ],
            'sort_order' => [
                'rules' => 'required|integer',
                'errors' => [
                    'required' => 'The Sort Order field is required.',
                    'integer' => 'Sort Order must be a number.',
                ],
            ],
        ];
        
        if (!$this->validate($validationRules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }      
    
        $desktopImage = $this->request->getFile('desktop_image');
        $mobileImage = $this->request->getFile('mobile_image');

        if (!$desktopImage->isValid() || !$mobileImage->isValid()) {
            return redirect()->back()->withInput()->with('error', 'Failed to upload files.');
        }

        $desktopImageDimensions = getimagesize($desktopImage->getTempName());
        $desktopImageWidth = $desktopImageDimensions[0];
        $desktopImageHeight = $desktopImageDimensions[1];

        if ($desktopImageWidth !== 1920 || $desktopImageHeight !== 1000) {
            return redirect()->back()->withInput()->with('error', 'Desktop image dimensions must be exactly 1920x1000 pixels.');
        }

        $mobileImageDimensions = getimagesize($mobileImage->getTempName());
        $mobileImageWidth = $mobileImageDimensions[0];
        $mobileImageHeight = $mobileImageDimensions[1];

        if ($mobileImageWidth !== 600 || $mobileImageHeight !== 1500) {
            return redirect()->back()->withInput()->with('error', 'Mobile image dimensions must be exactly 600x1500 pixels.');
        }

        $desktopImageName = pathinfo($desktopImage->getClientName(), PATHINFO_FILENAME) . '_' . date('Ymd_His') . '.' . $desktopImage->getExtension();
        $desktopImage->move(FCPATH . 'uploads/banner_images', $desktopImageName);

        $mobileImageName = pathinfo($mobileImage->getClientName(), PATHINFO_FILENAME) . '_' . date('Ymd_His') . '.' . $mobileImage->getExtension();
        $mobileImage->move(FCPATH . 'uploads/banner_images', $mobileImageName);

        
        $bannerData = [
            'page' => $this->request->getPost('page'),
            'title' => $this->request->getPost('title'),
            'caption' => $this->request->getPost('caption'),
            'desktop_image' => $desktopImageName,
            'mobile_image' => $mobileImageName,
            'hyperlink' => $this->request->getPost('hyperlink'),
            'sort_order' => $this->request->getPost('sort_order'),
            'is_published' => $this->request->getPost('is_published') ? 1 : 0
        ];
    
        try {
            $bannerModel->save($bannerData);
            log_message('info', 'Banner data created: ' . json_encode($bannerData));
            return redirect()->to(base_url('/adm1n/banner'))->with('success', 'Banner created successfully!');
        } catch (\Exception $e) {
            log_message('error', 'Database error: ' . $e->getMessage());
            return redirect()->back()->withInput()->with('error', 'Failed to create banner data.');
        }
    }
    

    public function checkDesktopDimensions(string $str, string $fields, array $data): bool
    {
        $image = $this->request->getFile('desktop_image');
        if ($image->isValid() && !$image->hasMoved()) {
            list($width, $height) = getimagesize($image->getTempName());
            return ($width == 1920 && $height == 1000);
        }
        return true;
    }

    public function checkMobileDimensions(string $str, string $fields, array $data): bool
    {
        $image = $this->request->getFile('mobile_image');
        if ($image->isValid() && !$image->hasMoved()) {
            list($width, $height) = getimagesize($image->getTempName());
            return ($width == 600 && $height == 1500);
        }
        return true;
    }

        private function generateUniqueFileName($file)
    {
        $fileName = $file->getClientName();
        $uniqueName = pathinfo($fileName, PATHINFO_FILENAME) . '_' . date('Dmy_His') . '.' . $file->getExtension();
        return $uniqueName;
    }

        public function edit($id)
    {
        $bannerModel = new BannerModel();
        $banner = $bannerModel->find($id);
        if (!$banner) {
            log_message('error', 'Banner not found with ID: ' . $id);
            return redirect()->to(base_url('/adm1n/banner'))->with('error', 'Banner not found');
        }
        return view('banner_form', ['banner' => $banner]);
    }

    public function update($id)
    {
        $bannerModel = new BannerModel();

        $banner = $bannerModel->find($id);
        if (!$banner) {
            return redirect()->to(base_url('/adm1n/banner'))->with('error', 'Banner not found');
        }

        $validationRules = [
            'page' => 'required',
            'title' => 'required|max_length[255]',
            'caption' => 'permit_empty|max_length[1000]',
            'hyperlink' => 'permit_empty|valid_url|max_length[255]',
            'sort_order' => 'permit_empty|integer',
            'is_published' => 'permit_empty|in_list[1,0]',
            'desktop_image' => 'permit_empty|uploaded[desktop_image]|max_size[desktop_image,2048]|is_image[desktop_image]',
            'mobile_image' => 'permit_empty|uploaded[mobile_image]|max_size[mobile_image,2048]|is_image[mobile_image]',
        ];

        if (!$this->validate($validationRules)) {
            $errors = $this->validator->getErrors();
            log_message('error', 'Validation Errors: ' . json_encode($errors));
            
            return redirect()->back()->withInput()->with('errors', $errors);
        }

        $desktopImage = $this->request->getFile('desktop_image');
        if ($desktopImage->isValid() && !$desktopImage->hasMoved()) {
            if ($banner['desktop_image'] && file_exists(FCPATH . 'uploads/banner_images/' . $banner['desktop_image'])) {
                unlink(FCPATH . 'uploads/banner_images/' . $banner['desktop_image']);
            }

            $desktopImageName = $this->generateUniqueFileName($desktopImage);
            $desktopImage->move(FCPATH . 'uploads/banner_images', $desktopImageName);
            $banner['desktop_image'] = $desktopImageName;
        }

        $mobileImage = $this->request->getFile('mobile_image');
        if ($mobileImage->isValid() && !$mobileImage->hasMoved()) {
            if ($banner['mobile_image'] && file_exists(FCPATH . 'uploads/banner_images/' . $banner['mobile_image'])) {
                unlink(FCPATH . 'uploads/banner_images/' . $banner['mobile_image']);
            }

            $mobileImageName = $this->generateUniqueFileName($mobileImage);
            $mobileImage->move(FCPATH . 'uploads/banner_images', $mobileImageName);
            $banner['mobile_image'] = $mobileImageName;
        }

        $banner['page'] = $this->request->getPost('page');
        $banner['title'] = $this->request->getPost('title');
        $banner['caption'] = $this->request->getPost('caption');
        $banner['hyperlink'] = $this->request->getPost('hyperlink');
        $banner['sort_order'] = $this->request->getPost('sort_order');
        $banner['is_published'] = $this->request->getPost('is_published') ? 1 : 0;

        try {
            $bannerModel->save($banner);
            log_message('info', 'Banner data updated: ' . json_encode($banner));
            return redirect()->to(base_url('/adm1n/banner'))->with('success', 'Banner updated successfully!');
        } catch (\Exception $e) {
            log_message('error', 'Database error: ' . $e->getMessage());
            return redirect()->back()->withInput()->with('errors', ['database' => 'Failed to update banner data.']);
        }
    }

    public function delete($id)
    {
        $bannerModel = new BannerModel();
        $banner = $bannerModel->find($id);

        if (!$banner) {
            return redirect()->to(base_url('/adm1n/banner'))->with('error', 'Banner not found');
        }

        if ($banner['desktop_image'] && file_exists(FCPATH . 'uploads/banner_images/' . $banner['desktop_image'])) {
            unlink(FCPATH . 'uploads/banner_images/' . $banner['desktop_image']);
        }
        if ($banner['mobile_image'] && file_exists(FCPATH . 'uploads/banner_images/' . $banner['mobile_image'])) {
            unlink(FCPATH . 'uploads/banner_images/' . $banner['mobile_image']);
        }

        if ($bannerModel->delete($id)) {
            return redirect()->to(base_url('/adm1n/banner'))->with('success', 'Banner deleted successfully');
        } else {
            return redirect()->to(base_url('/adm1n/banner'))->with('error', 'Failed to delete banner');
        }
    }

    public function toggleStatus($id)
    {
        $bannerModel = new BannerModel();
        $banner = $bannerModel->find($id);

        if ($banner) {
            $bannerModel->update($id, ['is_published' => !$banner['is_published']]);
            
            return $this->response->setJSON([
                'status' => 'success',
                'message' => 'Banner status updated',
                'is_published' => !$banner['is_published']
            ]);
        } else {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'Banner not found'
            ]);
        }
    }
}