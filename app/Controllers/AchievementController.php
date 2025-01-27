<?php

namespace App\Controllers;

use App\Models\Achievement;

class AchievementController extends BaseController
{
    protected $achievementModel;

    public function __construct()
    {
        $this->achievementModel = new Achievement();
    }

    public function index()
    {
        $data['achievements'] = $this->achievementModel->getAchievements();
        return view('achievements_list', $data);
    }

    public function create()
    {
        return view('achievements_form');
    }

    public function store()
    {
        $validation = \Config\Services::validation();

        $rules = [
            'title' => 'required',
            'image_file' => 'uploaded[image_file]|max_size[image_file,2048]|ext_in[image_file,jpg,jpeg,png,gif]',
            'category' => 'required|in_list[Sports Achievements,Teachers Achievements]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('validation', $this->validator->getErrors());
        }

        $imageFile = null;
        if ($file = $this->request->getFile('image_file')) {
            if ($file->isValid() && !$file->hasMoved()) {
                $filePath = FCPATH . 'uploads/achievements/';
                if (!is_dir($filePath)) {
                    mkdir($filePath, 0777, true);
                }

                $originalName = pathinfo($file->getName(), PATHINFO_FILENAME);
                $extension = $file->getExtension();
                $uniqueName = $originalName . '_' . date('dmy_His') . '.' . $extension;

                $file->move($filePath, $uniqueName);
                $imageFile = $uniqueName;
            }
        }

        $currentDateTime = date('Y-m-d H:i:s');

        $this->achievementModel->insert([
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'image_file' => $imageFile,
            'published' => $this->request->getPost('published') ? 1 : 0,
            'category' => $this->request->getPost('category'),
            'created_at' => $currentDateTime,
        ]);

        return redirect()->to('adm1n/achievements')->with('success', 'Achievement added successfully');
    }

    public function edit($id)
    {
        $data['achievement'] = $this->achievementModel->find($id);

        if (!$data['achievement']) {
            return redirect()->to('adm1n/achievements')->with('error', 'Achievement not found.');
        }

        return view('achievements_form', $data);
    }

    public function update($id)
    {
        $validation = \Config\Services::validation();

        $rules = [
            'title' => 'required',
            'image_file' => 'max_size[image_file,2048]|ext_in[image_file,jpg,jpeg,png,gif]',
            'category' => 'required|in_list[Sports Achievements,Teachers Achievements]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('validation', $this->validator->getErrors());
        }

        $achievement = $this->achievementModel->find($id);
        if (!$achievement) {
            return redirect()->to('adm1n/achievements')->with('error', 'Achievement not found.');
        }

        $imageFile = $achievement['image_file'];

        if ($file = $this->request->getFile('image_file')) {
            if ($file->isValid() && !$file->hasMoved()) {
                $filePath = FCPATH . 'uploads/achievements/';
                if (!is_dir($filePath)) {
                    mkdir($filePath, 0777, true);
                }

                if ($imageFile && file_exists($filePath . $imageFile)) {
                    unlink($filePath . $imageFile);
                }

                $originalName = pathinfo($file->getName(), PATHINFO_FILENAME);
                $extension = $file->getExtension();
                $uniqueName = $originalName . '_' . date('dmy_His') . '.' . $extension;

                $file->move($filePath, $uniqueName);
                $imageFile = $uniqueName;
            }
        }

        $currentDateTime = date('Y-m-d H:i:s');

        $this->achievementModel->update($id, [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'image_file' => $imageFile,
            'published' => $this->request->getPost('published') ? 1 : 0,
            'category' => $this->request->getPost('category'),
            'updated_at' => $currentDateTime,
        ]);

        return redirect()->to('adm1n/achievements')->with('success', 'Achievement updated successfully');
    }

    public function delete($id)
    {
        $achievement = $this->achievementModel->find($id);
        if ($achievement) {
            $pdfPath = FCPATH . 'uploads/achievements/' . $achievement['pdf_file'];
            if (file_exists($pdfPath)) {
                unlink($pdfPath);
            }
            $this->achievementModel->delete($id);
        }
        return redirect()->to('adm1n/achievements')->with('success', 'Achievement deleted successfully');
    }
}