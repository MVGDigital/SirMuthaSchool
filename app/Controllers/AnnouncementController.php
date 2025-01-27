<?php

namespace App\Controllers;

use App\Models\Announcement;

class AnnouncementController extends BaseController
{
    protected $announcementModel;

    public function __construct()
    {
        $this->announcementModel = new Announcement();
    }

    public function index()
    {
        $data['announcements'] = $this->announcementModel->getAnnouncements();
        return view('announcements_list', $data);
    }

    public function create()
    {
        return view('announcements_form');
    }

    public function store()
    {
        $validation = \Config\Services::validation();

        $rules = [
            'title' => 'required',
            'pdf_file' => 'uploaded[pdf_file]|max_size[pdf_file,2048]|ext_in[pdf_file,pdf]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('validation', $this->validator->getErrors());
        }

        $pdfFile = null;
        if ($file = $this->request->getFile('pdf_file')) {
            if ($file->isValid() && !$file->hasMoved()) {
                $filePath = FCPATH . 'uploads/announcements/';
                if (!is_dir($filePath)) {
                    mkdir($filePath, 0777, true);
                }
    
                $originalName = pathinfo($file->getName(), PATHINFO_FILENAME);
                $extension = $file->getExtension();
                $uniqueName = $originalName . '_' . date('dmy_His') . '.' . $extension;
    
                $file->move($filePath, $uniqueName);
                $pdfFile = $uniqueName;
            }
        }

        $currentDateTime = date('Y-m-d H:i:s');

        $this->announcementModel->insert([
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'pdf_file' => $pdfFile,
            'published' => $this->request->getPost('published') ? 1 : 0,
            'created_at' => $currentDateTime,
        ]);

        return redirect()->to('adm1n/announcements')->with('success', 'Announcement added successfully');
    }

    public function edit($id)
    {
        $data['announcement'] = $this->announcementModel->find($id);

        if (!$data['announcement']) {
            return redirect()->to('adm1n/announcements')->with('error', 'Announcement not found.');
        }

        return view('announcements_form', $data);
    }

    public function update($id)
    {
        $validation = \Config\Services::validation();

        $rules = [
            'title' => 'required',
            'pdf_file' => 'max_size[pdf_file,2048]|ext_in[pdf_file,pdf]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('validation', $this->validator->getErrors());
        }

        $announcement = $this->announcementModel->find($id);
        if (!$announcement) {
            return redirect()->to('adm1n/announcements')->with('error', 'Announcement not found.');
        }

        $pdfFile = $announcement['pdf_file'];

        if ($file = $this->request->getFile('pdf_file')) {
            if ($file->isValid() && !$file->hasMoved()) {
                $filePath = FCPATH . 'uploads/announcements/';
                if (!is_dir($filePath)) {
                    mkdir($filePath, 0777, true);
                }
    
                if ($pdfFile && file_exists($filePath . $pdfFile)) {
                    unlink($filePath . $pdfFile);
                }
    
                $originalName = pathinfo($file->getName(), PATHINFO_FILENAME);
                $extension = $file->getExtension();
                $uniqueName = $originalName . '_' . date('dmy_His') . '.' . $extension;
    
                $file->move($filePath, $uniqueName);
                $pdfFile = $uniqueName;
            }
        }
        $currentDateTime = date('Y-m-d H:i:s');

        $this->announcementModel->update($id, [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'pdf_file' => $pdfFile,
            'published' => $this->request->getPost('published') ? 1 : 0,
            'updated_at' => $currentDateTime,
        ]);

        return redirect()->to('adm1n/announcements')->with('success', 'Announcement updated successfully');
    }

    public function delete($id)
    {
        $announcement = $this->announcementModel->find($id);
        if ($announcement) {
            $pdfPath = FCPATH . 'uploads/announcements/' . $announcement['pdf_file'];
            if (file_exists($pdfPath)) {
                unlink($pdfPath);
            }
            $this->announcementModel->delete($id);
        }
        return redirect()->to('adm1n/announcements')->with('success', 'Announcement deleted successfully');
    }

    public function togglePublished($id)
    {
        $announcement = $this->announcementModel->find($id);

        if ($announcement) {
            $newStatus = $this->request->getJSON()->published ? 1 : 0;
            $this->announcementModel->update($id, ['published' => $newStatus]);

            return $this->response->setJSON([
                'status' => 'success',
                'message' => 'Published status updated successfully.',
            ]);
        }

        return $this->response->setJSON([
            'status' => 'error',
            'message' => 'Announcement not found.',
        ]);
    }
}