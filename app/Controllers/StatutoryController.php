<?php

namespace App\Controllers;

use App\Models\Statutory;

class StatutoryController extends BaseController
{
    protected $statutoryModel;

    public function __construct()
    {
        $this->statutoryModel = new Statutory();
    }

    public function index()
    {
        $data['statutory'] = $this->statutoryModel->getStatutory();
        return view('statutory_list', $data);
    }

    public function create()
    {
        return view('statutory_form');
    }

    public function store()
    {
        $validation = \Config\Services::validation();

        $rules = [
            'title' => 'required',
            'pdf_file' => 'uploaded[pdf_file]|ext_in[pdf_file,pdf]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('validation', $this->validator->getErrors());
        }

        $pdfFile = null;
        if ($file = $this->request->getFile('pdf_file')) {
            if ($file->isValid() && !$file->hasMoved()) {
                $filePath = FCPATH . 'uploads/statutory/';
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

        $this->statutoryModel->insert([
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'pdf_file' => $pdfFile,
            'published' => $this->request->getPost('published') ? 1 : 0,
            'created_at' => $currentDateTime,
        ]);

        return redirect()->to('adm1n/statutory')->with('success', 'Statutory record added successfully');
    }

    public function edit($id)
    {
        $data['statutory'] = $this->statutoryModel->find($id);

        if (!$data['statutory']) {
            return redirect()->to('adm1n/statutory')->with('error', 'Statutory record not found.');
        }

        return view('statutory_form', $data);
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

        $statutory = $this->statutoryModel->find($id);
        if (!$statutory) {
            return redirect()->to('adm1n/statutory')->with('error', 'Statutory record not found.');
        }

        $pdfFile = $statutory['pdf_file'];

        if ($file = $this->request->getFile('pdf_file')) {
            if ($file->isValid() && !$file->hasMoved()) {
                $filePath = FCPATH . 'uploads/statutory/';
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

        $this->statutoryModel->update($id, [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'pdf_file' => $pdfFile,
            'published' => $this->request->getPost('published') ? 1 : 0,
            'updated_at' => $currentDateTime,
        ]);

        return redirect()->to('adm1n/statutory')->with('success', 'Statutory record updated successfully');
    }

    public function delete($id)
    {
        $statutory = $this->statutoryModel->find($id);
        if ($statutory) {
            $pdfPath = FCPATH . 'uploads/statutory/' . $statutory['pdf_file'];
            if (file_exists($pdfPath)) {
                unlink($pdfPath);
            }
            $this->statutoryModel->delete($id);
        }
        return redirect()->to('adm1n/statutory')->with('success', 'Statutory record deleted successfully');
    }

    public function togglePublished($id)
    {
        $statutory = $this->statutoryModel->find($id);

        if ($statutory) {
            $newStatus = $this->request->getJSON()->published ? 1 : 0;
            $this->statutoryModel->update($id, ['published' => $newStatus]);

            return $this->response->setJSON([
                'status' => 'success',
                'message' => 'Published status updated successfully.',
            ]);
        }

        return $this->response->setJSON([
            'status' => 'error',
            'message' => 'Statutory record not found.',
        ]);
    }
}