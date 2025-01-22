<?php

namespace App\Controllers;

use App\Models\AnnualEvent;

class AnnualEventController extends BaseController
{
    protected $annualEventModel;

    public function __construct()
    {
        $this->annualEventModel = new AnnualEvent();
    }

    public function index()
    {
        $data['events'] = $this->annualEventModel->getEvents();
        return view('annual_events_list', $data);
    }

    public function create()
    {
        return view('annual_events_form');
    }

    public function store()
    {
        $validation = \Config\Services::validation();

        $rules = [
            'year' => 'required',
            'month' => 'required',
            'title' => 'required',
            'description' => 'required',
            'images' => 'uploaded[images.0]|max_size[images,2048]|is_image[images.0]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }

        $images = [];
        if ($files = $this->request->getFiles()) {
            foreach ($files['images'] as $file) {
                if ($file->isValid() && !$file->hasMoved()) {
                    $filePath = FCPATH . 'uploads/annual_events/';
                    if (!is_dir($filePath)) {
                        mkdir($filePath, 0777, true);
                    }
                    $file->move($filePath);
                    $images[] = $file->getName();
                }
            }
        }

            $this->annualEventModel->insert([
                'year' => $this->request->getPost('year'),
                'month' => $this->request->getPost('month'),
                'title' => $this->request->getPost('title'),
                'description' => $this->request->getPost('description'),
                'published' => $this->request->getPost('published') ? 1 : 0,
                'images' => json_encode($images),
            ]);

        return redirect()->to('adm1n/annual-events')->with('success', 'Event added successfully');
    }

    public function edit($id)
    {
        $data['event'] = $this->annualEventModel->find($id);
        return view('annual_events_form', $data);
    }

    public function update($id)
    {
        $validation = \Config\Services::validation();
        $this->validate([
            'year' => 'required',
            'month' => 'required',
            'title' => 'required',
            'description' => 'required',
            'images' => 'max_size[images,2048]|is_image[images.0]',
        ]);

        if ($this->request->getMethod() === 'post' && $this->validate()) {
            $event = $this->annualEventModel->find($id);
            $images = json_decode($event['images'], true);

            if ($files = $this->request->getFiles()) {
                foreach ($files['images'] as $file) {
                    if ($file->isValid() && !$file->hasMoved()) {
                        $filePath = FCPATH . 'uploads/annual_events/';
                        if (!is_dir($filePath)) {
                            mkdir($filePath, 0777, true);
                        }
                        $file->move($filePath);
                        $images[] = $file->getName();
                    }
                }
            }

            $this->annualEventModel->update($id, [
                'year' => $this->request->getPost('year'),
                'month' => $this->request->getPost('month'),
                'title' => $this->request->getPost('title'),
                'description' => $this->request->getPost('description'),
                'published' => $this->request->getPost('published') ? 1 : 0,
                'images' => json_encode($images),
            ]);

            return redirect()->to('adm1n/annual-events')->with('success', 'Event updated successfully');
        } else {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }
    }

    public function delete($id)
    {
        $event = $this->annualEventModel->find($id);
        if ($event) {
            $images = json_decode($event['images'], true);
            if ($images) {
                foreach ($images as $image) {
                    $imagePath = FCPATH . $image;
                    if (file_exists($imagePath)) {
                        unlink($imagePath);
                    }
                }
            }
            $this->annualEventModel->delete($id);
        }
        return redirect()->to('adm1n/annual-events')->with('success', 'Event deleted successfully');
    }
}