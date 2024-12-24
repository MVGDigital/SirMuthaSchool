<?php

namespace App\Controllers;

use App\Models\EventUserModel;
use CodeIgniter\Controller;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class EventUserController extends BaseController
{
    protected $eventUserModel;

    public function __construct()
    {
        $this->eventUserModel = new EventUserModel();
    }

    public function event()
    {
        $data['event_users'] = $this->eventUserModel->findAll();
        return view('event_user_table', $data);
    }

    public function edit($id)
    {
        $data['user'] = $this->eventUserModel->find($id);
        if (!$data['user']) {
            return redirect()->to('/adm1n/event_users')->with('error', 'User not found.');
        }
        return view('event_user_edit', $data);
    }

    public function update($id)
    {
        $user = $this->eventUserModel->find($id);
        if (!$user) {
            return redirect()->to('/adm1n/event_users')->with('error', 'User not found.');
        }

        $data = $this->request->getPost([
            'user_name', 
            'email', 
            'mobile_number', 
            'guests', 
            'residential_address'
        ]);

        if ($this->eventUserModel->update($id, $data)) {
            return redirect()->to('/adm1n/event_users')->with('success', 'User updated successfully.');
        }

        return redirect()->back()->withInput()->with('error', 'Failed to update user.');
    }

    public function delete($id)
    {
        $user = $this->eventUserModel->find($id);
        if (!$user) {
            return redirect()->to('/adm1n/event_users')->with('error', 'User not found.');
        }

        if ($this->eventUserModel->delete($id)) {
            return redirect()->to('/adm1n/event_users')->with('success', 'User deleted successfully.');
        }

        return redirect()->to('/adm1n/event_users')->with('error', 'Failed to delete user.');
    }

    public function exportCsv()
    {
        $users = $this->eventUserModel->findAll();

        if (!$users) {
            return redirect()->back()->with('error', 'No data available to export');
        }

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $sheet->setCellValue('A1', 'Event ID');
        $sheet->setCellValue('B1', 'User Name');
        $sheet->setCellValue('C1', 'Email');
        $sheet->setCellValue('D1', 'Mobile Number');
        $sheet->setCellValue('E1', 'Guests');
        $sheet->setCellValue('F1', 'Residential Address');
        $sheet->setCellValue('G1', 'Register At');
        $row = 2;
        foreach ($users as $user) {
            $sheet->setCellValue('A' . $row, $user['event_id']);
            $sheet->setCellValue('B' . $row, $user['user_name']);
            $sheet->setCellValue('C' . $row, $user['email']);
            $sheet->setCellValue('D' . $row, $user['mobile_number']);
            $sheet->setCellValue('E' . $row, $user['guests']);
            $sheet->setCellValue('F' . $row, $user['residential_address']);
            $sheet->setCellValue('G' . $row, $user['created_at']);
            $row++;
        }

        $filename = "event_users.xlsx";

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="' . $filename . '"');
        header('Cache-Control: max-age=0');

        $writer = new Xlsx($spreadsheet);
        $writer->save('php://output');
        exit;
    }

}