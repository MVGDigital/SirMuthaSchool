<?php

namespace App\Controllers;

use App\Models\AlumniEvent;

class AlumniEventController extends BaseController
{
    protected $alumniEventModel;

    public function __construct()
    {
        $this->alumniEventModel = new AlumniEvent();
    }

    public function index()
    {
        $data['events'] = $this->alumniEventModel->getEvents();
        return view('alumni_events_list', $data);
    }

    public function create()
    {
        return view('alumni_events_form');
    }

    public function store()
    {
        $images = [];
        if ($files = $this->request->getFiles()) {
            foreach ($files['images'] as $file) {
                if ($file->isValid() && !$file->hasMoved()) {
                    $filePath = FCPATH . 'uploads/alumni_events/';
                    if (!is_dir($filePath)) {
                        mkdir($filePath, 0777, true);
                    }
                    $file->move($filePath);
                    $images[] = $file->getName();
                }
            }
        }

        $this->alumniEventModel->insert([
            'year' => $this->request->getPost('year'),
            'month' => $this->request->getPost('month'),
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'images' => json_encode($images),
        ]);

        return redirect()->to('adm1n/alumni-events')->with('success', 'Event added successfully');
    }

    public function edit($id)
    {
        $data['event'] = $this->alumniEventModel->find($id);
        return view('alumni_events_form', $data);
    }

    public function update($id)
    {
        $event = $this->alumniEventModel->find($id);
        $images = json_decode($event['images'], true);

        if ($files = $this->request->getFiles()) {
            foreach ($files['images'] as $file) {
                if ($file->isValid() && !$file->hasMoved()) {
                    $filePath = FCPATH . 'uploads/alumni_events/';
                    if (!is_dir($filePath)) {
                        mkdir($filePath, 0777, true);
                    }
                    $file->move($filePath);
                    $images[] = $file->getName();
                }
            }
        }

        $this->alumniEventModel->update($id, [
            'year' => $this->request->getPost('year'),
            'month' => $this->request->getPost('month'),
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'images' => json_encode($images),
        ]);

        return redirect()->to('adm1n/alumni-events')->with('success', 'Event updated successfully');
    }

    public function delete($id)
    {
        $event = $this->alumniEventModel->find($id);
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
            $this->alumniEventModel->delete($id);
        }
        return redirect()->to('adm1n/alumni-events')->with('success', 'Event deleted successfully');
    }
}
