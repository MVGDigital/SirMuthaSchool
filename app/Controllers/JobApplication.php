<?php

namespace App\Controllers;

use App\Models\JobApplicationModel;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class JobApplication extends BaseController
{
    public function index()
    {
        $model = new JobApplicationModel();
        $data['applications'] = $model->getApplications();
        return view('job_application_list', $data);
    }

    public function delete($id)
    {
        $model = new JobApplicationModel();
        $model->delete($id);
        return redirect()->to(base_url('adm1n/job-applications'))->with('success', 'Application deleted successfully.');
    }

    public function export()
    {
        log_message('debug', 'Export function called.');
        $model = new JobApplicationModel();
        $applications = $model->getApplications();

        if (!$applications) {
            return redirect()->back()->with('error', 'No applications found to export.');
        }

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $sheet->setCellValue('A1', 'S.No');
        $sheet->setCellValue('B1', 'Job ID');
        $sheet->setCellValue('C1', 'Applied Date');
        $sheet->setCellValue('D1', 'Applicant Name');
        $sheet->setCellValue('E1', 'Job Title');

        $serial = 1;
        $row = 2;
        foreach ($applications as $app) {
            $sheet->setCellValue('A' . $row, $serial++);
            $sheet->setCellValue('B' . $row, $app['job_id']);
            $sheet->setCellValue('C' . $row, date('d-m-Y', strtotime($app['created_at'])));
            $sheet->setCellValue('D' . $row, $app['first_name'] . ' ' . $app['last_name']);
            $sheet->setCellValue('E' . $row, $app['job_title']);
            $row++;
        }

        $filename = "job_applications_" . date('Ymd') . ".xlsx";

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="' . $filename . '"');
        header('Cache-Control: max-age=0');

        $writer = new Xlsx($spreadsheet);
        $writer->save('php://output');
        exit;
    }
}
