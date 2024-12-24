<?php

namespace App\Controllers;

use App\Models\EventModel;
use CodeIgniter\Controller;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class EventController extends Controller
{
    public function index()
{
    $eventModel = new EventModel();
    $perPage = 20;

    $currentPage = $this->request->getVar('page') ? $this->request->getVar('page') : 1;

    $data['events'] = $eventModel->paginate($perPage);
    $data['pager'] = $eventModel->pager;

    if ($this->request->isAJAX()) {
        return $this->response->setJSON([
            'events' => $data['events'],
            'pager' => $data['pager']->links()
        ]);
    }

    return view('event-index', $data);
}

    public function add()
    {
        return view('add_new_event');
    }

    public function save()
    {
        helper(['form', 'url']);
        $eventModel = new EventModel();

        $validation = $this->validate([
            'event_name' => 'required|min_length[3]',
            'event_date' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'event_location' => 'required|min_length[3]',
            'event_description' => 'required|min_length[10]',
            'desktop_image' => [
                'uploaded[desktop_image]',
                'mime_in[desktop_image,image/jpg,image/jpeg,image/gif,image/png]',
                'max_size[desktop_image,2048]',
            ],
            'mobile_image' => [
                'uploaded[mobile_image]',
                'mime_in[mobile_image,image/jpg,image/jpeg,image/gif,image/png]',
                'max_size[mobile_image,2048]',
            ],
            'registration_required' => 'required|in_list[yes,no]',
        ]);

        if (!$validation) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $desktopImage = $this->request->getFile('desktop_image');
        $desktopImageName = $desktopImage->getRandomName();
        $desktopImage->move('uploads/desktop_images', $desktopImageName);

        $mobileImage = $this->request->getFile('mobile_image');
        $mobileImageName = $mobileImage->getRandomName();
        $mobileImage->move('uploads/mobile_images', $mobileImageName);

        $data = [
            'event_name' => $this->request->getPost('event_name'),
            'event_date' => $this->request->getPost('event_date'),
            'start_time' => $this->request->getPost('start_time'),
            'end_time' => $this->request->getPost('end_time'),
            'event_location' => $this->request->getPost('event_location'),
            'event_description' => $this->request->getPost('event_description'),
            'registration_required' => $this->request->getPost('registration_required'),
            'desktop_image' => $desktopImageName,
            'mobile_image' => $mobileImageName,
            'is_published' => $this->request->getPost('is_published') ? 1 : 0,
        ];

        $eventModel->save($data);

        return redirect()->to(base_url('/adm1n/event-list'))->with('success', 'Event created successfully');
    }

    public function edit($id)
{
    $eventModel = new EventModel();
    $event = $eventModel->find($id);

    if (!$event) {
        return redirect()->to(base_url('adm1n/event-list'))->with('error', 'Event not found');
    }

    return view('edit_event', ['event' => $event]);
}


public function update($id)
{
    $eventModel = new EventModel();
    $event = $eventModel->find($id);

    if (!$event) {
        return redirect()->to(base_url('adm1n/event-list'))->with('error', 'Event not found');
    }

    helper(['form', 'url']);

    $validation = $this->validate([
        'event_name' => 'required|min_length[3]',
        'event_date' => 'required',
        'start_time' => 'required',
        'end_time' => 'required',
        'registration_required' => 'required|in_list[1,0]',
        'event_location' => 'required|min_length[3]',
        'event_description' => 'required|min_length[10]',
        'desktop_image' => [
            'mime_in[desktop_image,image/jpg,image/jpeg,image/gif,image/png]',
            'max_size[desktop_image,2048]',
        ],
        'mobile_image' => [
            'mime_in[mobile_image,image/jpg,image/jpeg,image/gif,image/png]',
            'max_size[mobile_image,2048]',
        ],
        'registration_required' => 'required|in_list[yes,no]',
    ]);

    if (!$validation) {
        return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
    }

    $data = [
        'event_name' => $this->request->getPost('event_name'),
        'event_date' => $this->request->getPost('event_date'),
        'start_time' => $this->request->getPost('start_time'),
        'end_time' => $this->request->getPost('end_time'),
        'registration_required' => $this->request->getPost('registration_required') == 1 ? 'yes' : 'no',
        'event_location' => $this->request->getPost('event_location'),
        'event_description' => $this->request->getPost('event_description'),
        'registration_required' => $this->request->getPost('registration_required'),
        'is_published' => $this->request->getPost('is_published') ? 1 : 0,
    ];

    // Handle desktop image if uploaded
    $desktopImage = $this->request->getFile('desktop_image');
    if ($desktopImage && $desktopImage->isValid() && !$desktopImage->hasMoved()) {
        // Debugging output
        log_message('info', 'Desktop image is valid and ready for upload.');
        $desktopImageName = $desktopImage->getRandomName();
        $desktopImage->move('uploads/desktop_images', $desktopImageName);
        $data['desktop_image'] = $desktopImageName;
    
        // Delete old file
        if (!empty($event['desktop_image']) && file_exists('uploads/desktop_images/' . $event['desktop_image'])) {
            unlink('uploads/desktop_images/' . $event['desktop_image']);
        }
    } else {
        log_message('error', 'Desktop image upload failed: ' . json_encode($desktopImage->getErrorString()));
    }    

    // Handle mobile image if uploaded
    $mobileImage = $this->request->getFile('mobile_image');
    if ($mobileImage && $mobileImage->isValid() && !$mobileImage->hasMoved()) {
        $mobileImageName = $mobileImage->getRandomName();
        $mobileImage->move('uploads/mobile_images', $mobileImageName);
        $data['mobile_image'] = $mobileImageName;

        // Delete old mobile image if a new one is uploaded
        if (!empty($event['mobile_image']) && file_exists('uploads/mobile_images/' . $event['mobile_image'])) {
            unlink('uploads/mobile_images/' . $event['mobile_image']);
        }
    }

    if ($eventModel->update($id, $data)) {
        log_message('info', 'Event updated with data: ' . json_encode($data));
        return redirect()->to(base_url('adm1n/event-list'))->with('success', 'Event updated successfully');
    } else {
        log_message('error', 'Event update failed with data: ' . json_encode($data));
        return redirect()->back()->with('error', 'Failed to update event')->withInput();
    }    
}

    public function view($id)
    {
        $eventModel = new EventModel();
        $event = $eventModel->find($id);

        if (!$event) {
            return redirect()->to(base_url('adm1n/events'))->with('error', 'Event not found');
        }

        return view('view_event', ['event' => $event]);
    }

    public function delete($id)
    {
        $eventModel = new EventModel();
        $eventModel->delete($id);

        return redirect()->to(base_url('adm1n/event-list'))->with('success', 'Event deleted successfully');
    }

    public function exportExcel()
    {
        $eventModel = new EventModel();
        $events = $eventModel->findAll();

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $sheet->setCellValue('A1', 'Event Name');
        $sheet->setCellValue('B1', 'Event Date');
        $sheet->setCellValue('C1', 'Start Time');
        $sheet->setCellValue('D1', 'End Time');
        $sheet->setCellValue('E1', 'Location');
        $sheet->setCellValue('F1', 'Description');
        $sheet->setCellValue('G1', 'Registration Required');
        $sheet->setCellValue('H1', 'Published');

        $row = 2;
        foreach ($events as $event) {
            $sheet->setCellValue('A' . $row, $event['event_name']);
            $sheet->setCellValue('B' . $row, $event['event_date']);
            $sheet->setCellValue('C' . $row, $event['start_time']);
            $sheet->setCellValue('D' . $row, $event['end_time']);
            $sheet->setCellValue('E' . $row, $event['event_location']);
            $sheet->setCellValue('F' . $row, $event['event_description']);
            $sheet->setCellValue('G' . $row, $event['registration_required']);
            $sheet->setCellValue('H' . $row, $event['is_published'] ? 'Yes' : 'No');
            $row++;
        }

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="events.xlsx"');
        header('Cache-Control: max-age=0');

        $writer = new Xlsx($spreadsheet);
        $writer->save('php://output');
        exit;
    }
}