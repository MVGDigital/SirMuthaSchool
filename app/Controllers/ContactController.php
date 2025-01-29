<?php

namespace App\Controllers;

use App\Models\ContactModel;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class ContactController extends BaseController
{
    public function index()
    {
        $contactModel = new ContactModel();
        $data['contacts'] = $contactModel->findAll();

        return view('contact_list', $data);
    }

    public function export($contact_id)
    {
        $contactModel = new ContactModel();
        $contact = $contactModel->find($contact_id);

        if ($contact) {
            $spreadsheet = new Spreadsheet();
            $sheet = $spreadsheet->getActiveSheet();

            $sheet->setCellValue('A1', 'First Name');
            $sheet->setCellValue('B1', 'Last Name');
            $sheet->setCellValue('C1', 'Email');
            $sheet->setCellValue('D1', 'Phone');
            $sheet->setCellValue('E1', 'Message');

            $sheet->setCellValue('A2', $contact['first_name']);
            $sheet->setCellValue('B2', $contact['last_name']);
            $sheet->setCellValue('C2', $contact['email']);
            $sheet->setCellValue('D2', $contact['phone']);
            $sheet->setCellValue('E2', $contact['message']);

            $filename = 'contact_' . $contact['first_name'] . '.xlsx';

            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            header('Content-Disposition: attachment; filename="' . $filename . '"');
            header('Cache-Control: max-age=0');

            $writer = new Xlsx($spreadsheet);
            $writer->save('php://output');
            exit;
        }

        return redirect()->back()->with('error', 'Contact not found');
    }
    }
