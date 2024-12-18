<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TeacherModel;

class Teacher extends BaseController
{
    public function index()
    {
        $teacherModel = new TeacherModel();
        $data['board_of_members'] = $teacherModel->findAll();
        return view('teacher_list', $data);
    }

    public function add()
    {
        $data['board_of_members'] = [];
        return view('teacher_form', $data);
    }

    public function edit($id)
    {
        $teacherModel = new TeacherModel();
        $data['board_of_members'] = $teacherModel->find($id);

        if (!$data['board_of_members']) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Teacher not found');
        }

        return view('teacher_form', $data);
    }

    public function submit()
    {
        return $this->saveTeacher();
    }

    public function update($id)
    {
        return $this->saveTeacher($id);
    }

    private function saveTeacher($id = null)
    {
        $teacherModel = new TeacherModel();

        $rules = [
            'name' => 'required',
            'designation' => 'required',
            'content' => 'permit_empty'
        ];

        $file = $this->request->getFile('teacher_photo');
        if ($file && $file->isValid()) {
            $rules['teacher_photo'] = 'uploaded[teacher_photo]|max_size[teacher_photo,2048]|is_image[teacher_photo]|mime_in[teacher_photo,image/jpg,image/jpeg,image/png]';
        }

        $validation = \Config\Services::validation();
        $validation->setRules($rules);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('validation', $validation->getErrors());
        }

        $newName = $teacher['photo'] ?? '';
        if ($file && $file->isValid() && !$file->hasMoved()) {
            try {
                $newName = $file->getRandomName();
                $file->move(FCPATH . 'public/uploads/teacher_photos', $newName);
            } catch (\Exception $e) {
                return redirect()->back()->with('error', 'Error uploading photo: ' . $e->getMessage())->withInput();
            }
        }        

        $data = [
            'name' => $this->request->getPost('name'),
            'designation' => $this->request->getPost('designation'),
            'content' => $this->request->getPost('content'),
            'photo' => $newName,
        ];

        if ($id) {
            $existingTeacher = $teacherModel->find($id);
            if (!$existingTeacher) {
                return redirect()->back()->with('error', 'Teacher not found')->withInput();
            }
            $teacherModel->update($id, $data);
            return redirect()->to(base_url('adm1n/teacher'))->with('success', 'Teacher profile updated successfully');
        } else {
            $teacherModel->insert($data);
            return redirect()->to(base_url('adm1n/teacher'))->with('success', 'Teacher profile added successfully');
        }
    }

    public function delete($id)
    {
        $teacherModel = new TeacherModel();
        $teacherModel->delete($id);
        return redirect()->to(base_url('adm1n/teacher'))->with('success', 'Teacher profile deleted successfully');
    }
}