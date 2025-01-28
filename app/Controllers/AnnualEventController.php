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
            'event_date' => 'required|valid_date',
            'title' => 'required',
            'description' => 'required',
            'images' => 'uploaded[images]|max_size[images,2048]|is_image[images]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }

        $image = null;
        if ($file = $this->request->getFile('images')) {
            if ($file->isValid() && !$file->hasMoved()) {
                $filePath = FCPATH . 'uploads/annual_events/';
                if (!is_dir($filePath)) {
                    mkdir($filePath, 0777, true);
                }
    
                $originalName = pathinfo($file->getName(), PATHINFO_FILENAME);
                $extension = $file->getExtension();
                $uniqueName = $originalName . '_' . date('dmY_His') . '.' . $extension;
    
                $file->move($filePath, $uniqueName);
                $image = $uniqueName;
            }
        }

        $this->annualEventModel->insert([
            'event_date' => $this->request->getPost('event_date'),
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'published' => $this->request->getPost('published') ? 1 : 0,
            'images' => $image,
        ]);

        return redirect()->to('adm1n/annual-events')->with('success', 'Event added successfully');
    }

    public function edit($id)
    {
        $data['event'] = $this->annualEventModel->find($id);

        if (!$data['event']) {
            return redirect()->to('adm1n/annual-events')->with('error', 'Event not found.');
        }

        return view('annual_events_form', $data);
    }

    public function update($id)
    {
        $validation = \Config\Services::validation();
        
        $rules = [
            'event_date' => 'required|valid_date',
            'title' => 'required',
            'description' => 'required',
            'images' => 'max_size[images,2048]|is_image[images]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }

        $event = $this->annualEventModel->find($id);
        if (!$event) {
            return redirect()->to('adm1n/annual-events')->with('error', 'Event not found.');
        }

        $currentImage = $event['images'];

        if ($file = $this->request->getFile('images')) {
            if ($file->isValid() && !$file->hasMoved()) {
                $filePath = FCPATH . 'uploads/annual_events/';
                if (!is_dir($filePath)) {
                    mkdir($filePath, 0777, true);
                }
    
                if ($currentImage && file_exists($filePath . $currentImage)) {
                    unlink($filePath . $currentImage);
                }
    
                $originalName = pathinfo($file->getName(), PATHINFO_FILENAME);
                $extension = $file->getExtension();
                $uniqueName = $originalName . '_' . date('dmY_His') . '.' . $extension;
    
                $file->move($filePath, $uniqueName);
                $currentImage = $uniqueName;
            }
        }

        $this->annualEventModel->update($id, [
            'event_date' => $this->request->getPost('event_date'),
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'published' => $this->request->getPost('published') ? 1 : 0,
            'images' => $currentImage,
        ]);

        return redirect()->to('adm1n/annual-events')->with('success', 'Event updated successfully');
    }

    public function delete($id)
    {
        $event = $this->annualEventModel->find($id);
        if ($event) {
            $imagePath = FCPATH . 'uploads/annual_events/' . $event['images'];
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
            $this->annualEventModel->delete($id);
        }
        return redirect()->to('adm1n/annual-events')->with('success', 'Event deleted successfully');
    }

    public function togglePublished($id)
    {
        $eventModel = new AnnualEvent();
        $event = $eventModel->find($id);

        if ($event) {
            $newStatus = $this->request->getJSON()->published ? 1 : 0;
            $eventModel->update($id, ['published' => $newStatus]);

            return $this->response->setJSON([
                'status' => 'success',
                'message' => 'Published status updated successfully.',
            ]);
        }

        return $this->response->setJSON([
            'status' => 'error',
            'message' => 'Event not found.',
        ]);
    }
}