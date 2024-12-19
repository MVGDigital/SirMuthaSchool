<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BoardOfMembersModel;

class BoardOfMembers extends BaseController
{
    public function index()
    {
        $boardOfMembersModel = new BoardOfMembersModel();
        $data['board_of_members'] = $boardOfMembersModel->findAll();
        return view('boardofmembers_list', $data);
    }

    public function add()
    {
        $data['board_of_members'] = [];
        return view('boardofmembers_form', $data);
    }

    public function edit($id)
    {
        $boardOfMembersModel = new BoardOfMembersModel();
        $data['board_of_members'] = $boardOfMembersModel->find($id);

        if (!$data['board_of_members']) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Board of Member not found');
        }

        return view('boardofmembers_form', $data);
    }

    public function submit()
    {
        return $this->saveBoardOfMember();
    }

    public function update($id)
    {
        return $this->saveBoardOfMember($id);
    }

    private function saveBoardOfMember($id = null)
    {
        $boardOfMembersModel = new BoardOfMembersModel();

        $rules = [
            'name' => 'required',
            'designation' => 'required',
            'content' => 'permit_empty'
        ];

        $file = $this->request->getFile('boardofmember_photo');
        if ($file && $file->isValid()) {
            $rules['boardofmember_photo'] = 'uploaded[boardofmember_photo]|max_size[boardofmember_photo,2048]|is_image[boardofmember_photo]|mime_in[boardofmember_photo,image/jpg,image/jpeg,image/png]';
        }

        $validation = \Config\Services::validation();
        $validation->setRules($rules);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('validation', $validation->getErrors());
        }

        $newName = $boardofmember['photo'] ?? '';
        if ($file && $file->isValid() && !$file->hasMoved()) {
            try {
                $newName = $file->getRandomName();
                $file->move(FCPATH . 'public/uploads/boardofmember_photos', $newName);
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
            $existingBoardOfMember = $boardOfMembersModel->find($id);
            if (!$existingBoardOfMember) {
                return redirect()->back()->with('error', 'Board of Member not found')->withInput();
            }
            $boardOfMembersModel->update($id, $data);
            return redirect()->to(base_url('adm1n/boardofmember'))->with('success', 'Board of Member profile updated successfully');
        } else {
            $boardOfMembersModel->insert($data);
            return redirect()->to(base_url('adm1n/boardofmember'))->with('success', 'Board of Member profile added successfully');
        }
    }

    public function delete($id)
    {
        $boardOfMembersModel = new BoardOfMembersModel();
        $boardOfMembersModel->delete($id);
        return redirect()->to(base_url('adm1n/boardofmember'))->with('success', 'Board of Member profile deleted successfully');
    }
}
