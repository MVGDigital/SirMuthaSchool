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
        log_message('debug', 'Board of Members Data: ' . print_r($data['board_of_members'], true));
        return view('boardofmembers_list', $data);
    }

    public function add()
    {
        $data['boardofmembers'] = [];
        $data['page_title'] = 'Add Board of Member';
        return view('boardofmembers_form', $data);
    }

    public function edit($id)
    {
        $boardOfMembersModel = new BoardOfMembersModel();
        $data['boardofmembers'] = $boardOfMembersModel->find($id);

        if (!$data['boardofmembers']) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Board of Member not found');
        }

        $data['page_title'] = 'Edit Board of Member';
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
            'content' => 'permit_empty',
            'sort_order' => 'required|integer',
        ];

        $file = $this->request->getFile('boardofmembers_photo');
        if ($file && $file->isValid()) {
            $rules['boardofmembers_photo'] = 'uploaded[boardofmembers_photo]|max_size[boardofmembers_photo,2048]|is_image[boardofmembers_photo]|mime_in[boardofmembers_photo,image/jpg,image/jpeg,image/png]';
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
                $file->move(FCPATH . 'uploads/boardofmember_photos', $newName);
            } catch (\Exception $e) {
                return redirect()->back()->with('error', 'Error uploading photo: ' . $e->getMessage())->withInput();
            }
        }        

        $data = [
            'name' => $this->request->getPost('name'),
            'designation' => $this->request->getPost('designation'),
            'content' => $this->request->getPost('content'),
            'photo' => $newName,
            'sort_order' => $this->request->getPost('sort_order'),
            'is_published' => $this->request->getPost('is_published') ? 1 : 0,
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

    public function toggleStatus($id)
    {
        $boardOfMembersModel = new BoardOfMembersModel();
        $member = $boardOfMembersModel->find($id);

        if ($member) {
            $newStatus = $this->request->getPost('is_published') === 'true' ? 1 : 0;
            log_message('info', 'Member ID: ' . $id . ' New Status Received: ' . $newStatus);

            $updateResult = $boardOfMembersModel->update($id, ['is_published' => $newStatus]);
            log_message('info', 'Update Result: ' . json_encode($updateResult));

            return $this->response->setJSON([
                'status' => 'success',
                'message' => 'Publish status updated',
                'is_published' => $newStatus
            ]);
        } else {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'Member not found'
            ]);
        }
    }
}