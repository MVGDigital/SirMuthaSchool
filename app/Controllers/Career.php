<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\CareerModel;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Career extends BaseController
{
    public function index()
    {
        $data = [];
        return view('career_list', $data);
    }

    public function getCareers()
    {
        $careerModel = new CareerModel();

        $searchTerm = $this->request->getGet('search') ?? '';
        $page = (int)$this->request->getGet('page') ?? 1;
        $rowsPerPage = (int)$this->request->getGet('rowsPerPage') ?? 10;

        if ($page < 1) {
            $page = 1;
        }
        if ($rowsPerPage < 1) {
            $rowsPerPage = 10;
        }

        $totalCareers = $careerModel->countCareers($searchTerm);
        $totalPages = ceil($totalCareers / $rowsPerPage);

        if ($page > $totalPages && $totalPages > 0) {
            $page = $totalPages;
        }

        $careers = $careerModel->getCareersWithPagination($searchTerm, $page, $rowsPerPage);

        $data = [];
        $serial = ($page - 1) * $rowsPerPage + 1;
        foreach ($careers as $career) {
            $data[] = [
                $serial++,
                esc($career['job_title']),
                esc($career['employment_type']),
                esc($career['location']),
                esc(date('d-m-Y', strtotime($career['posted_on']))),
                esc(date('d-m-Y', strtotime($career['last_applied_date']))),
                '<a href="' . base_url('adm1n/career/edit/' . $career['career_id']) . '"><i class="las la-pen text-secondary font-16"></i></a>
                <a href="' . base_url('adm1n/career/view/' . $career['career_id']) . '"><i class="icofont-eye text-secondary font-16"></i></a>
                <a href="' . base_url('adm1n/career/delete/' . $career['career_id']) . '" onclick="return confirm(\'Are you sure you want to delete this job?\');"><i class="las la-trash-alt text-secondary font-16"></i></a>'
            ];
        }

        return $this->response->setJSON(['data' => $data, 'totalPages' => $totalPages]);
    }

    public function add()
    {
        return view('career_form');
    }

    public function edit($id)
    {
        $careerModel = new CareerModel();
        $data['career'] = $careerModel->find($id);

        if (!$data['career']) {
            return redirect()->to(base_url('adm1n/career'));
        }

        return view('career_form', $data);
    }

    public function submit()
    {
        $validation = \Config\Services::validation();
        $careerModel = new CareerModel();

        $rules = [
            'job_title'            => 'required|max_length[255]',
            'employment_type'      => 'required|in_list[Full-time,Part-time,Contract]',
            'posted_on'            => 'required|valid_date',
            'location'             => 'required|max_length[255]',
            'job_overview'         => 'required',
            'qualifications'       => 'required',
            'experience'           => 'integer',
            'last_applied_date'    => 'valid_date',
            'publish'              => 'permit_empty|in_list[0,1]',
        ];

        $validation->setRules($rules);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors())->with('validation', $validation);
        }

        $data = [
            'job_title'            => $this->request->getPost('job_title'),
            'employment_type'      => $this->request->getPost('employment_type'),
            'posted_on'            => $this->request->getPost('posted_on'),
            'location'             => $this->request->getPost('location'),
            'job_overview'         => $this->request->getPost('job_overview'),
            'qualifications'       => $this->request->getPost('qualifications'),
            'experience'           => $this->request->getPost('experience'),
            'who_are_we_looking_for' => $this->request->getPost('who_are_we_looking_for'),
            'key_responsibilities' => $this->request->getPost('key_responsibilities'),
            'must_have'            => $this->request->getPost('must_have'),
            'nice_to_have'         => $this->request->getPost('nice_to_have'),
            'last_applied_date'    => $this->request->getPost('last_applied_date'),
            'publish'              => $this->request->getPost('publish') === '1',
        ];

        if ($this->request->getPost('career_id')) {
            $careerModel->update($this->request->getPost('career_id'), $data);
            $message = 'Job posting updated successfully';
        } else {
            $careerModel->insert($data);
            $message = 'Job posting added successfully';
        }

        return redirect()->to(base_url('adm1n/career'))->with('success', $message);
    }

    public function view($id)
    {
        $careerModel = new CareerModel();
        $data['career'] = $careerModel->find($id);

        if (!$data['career']) {
            return redirect()->to(base_url('adm1n/career'))->with('error', 'Career not found.');
        }

        return view('career_view', $data);
    }

    public function delete($id)
    {
        $careerModel = new CareerModel();
        $careerModel->delete($id);
        return redirect()->to(base_url('adm1n/career'))->with('success', 'Job deleted successfully');
    }

    public function export()
    {
        $careerModel = new CareerModel();
        $careers = $careerModel->getAllCareersForExport();

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $headers = ['Job Type', 'Employment Type', 'Posted On', 'Location', 'Job Overview',
                    'Qualifications', 'Experience', 'Who Are We Looking For', 'Key Responsibilities',
                    'Must Have', 'Nice to Have', 'Last Applied Date', 'Publish'];
        $sheet->fromArray($headers, null, 'A1');

        $rowNumber = 2;
        foreach ($careers as $career) {
            $sheet->fromArray([
                $career['job_title'],
                $career['employment_type'],
                $formattedPostedOn = date('d-m-Y', strtotime($career['posted_on'])),
                $career['location'],
                $career['job_overview'],
                $career['qualifications'],
                $career['experience'],
                $career['who_are_we_looking_for'],
                $career['key_responsibilities'],
                $career['must_have'],
                $career['nice_to_have'],
                $formattedLastApplied = date('d-m-Y', strtotime($career['last_applied_date'])),
                $career['publish'] ? 'Yes' : 'No'
            ], null, 'A' . $rowNumber++);
        }

        $filename = 'career_list.xlsx';
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="' . $filename . '"');
        header('Cache-Control: max-age=0');

        $writer = new Xlsx($spreadsheet);
        $writer->save('php://output');
        exit();
    }
}