<?php

namespace App\Controllers;

use App\Models\ContactModel;
use App\Models\BannerModel;
use Aws\Ses\SesClient;
use Aws\Exception\AwsException;

class Contact extends BaseController
{
    public function index()
    {
        $bannerModel = new BannerModel();

        $banner = $bannerModel->where('page', 'contact')->where('is_published', 1)->first();
        $data = [
            'page_title' => 'Contact',
            'page_code' => 'contact',
            'banner' => $banner
        ];

        return view('header', $data) . view('contact', $data) . view('footer');
    }

    public function submitContactForm()
{
    $contactModel = new ContactModel();

    $validationRules = [
        'first-name' => 'required|min_length[2]',
        'last-name' => 'required|min_length[2]',
        'email' => 'required|valid_email',
        'mobile-number' => 'required|numeric|min_length[10]|max_length[15]',
        'msg' => 'required|min_length[10]'
    ];

    if (!$this->validate($validationRules)) {
        return $this->response->setJSON(['status' => 'error', 'message' => 'Validation failed. Please check your input.']);
    }

    $contactData = [
        'first_name' => $this->request->getPost('first-name'),
        'last_name' => $this->request->getPost('last-name'),
        'email' => $this->request->getPost('email'),
        'phone' => $this->request->getPost('mobile-number'),
        'message' => $this->request->getPost('msg')
    ];

    try {
        $contactModel->save($contactData);

        $this->sendContactFormNotification($contactData);

        return $this->response->setJSON(['status' => 'success', 'message' => 'Your message has been sent successfully!']);
    } catch (\Exception $e) {
        log_message('error', 'Error saving contact form: ' . $e->getMessage());
        return $this->response->setJSON(['status' => 'error', 'message' => 'There was an error while submitting your message.']);
    }
}

/**
 * Send email notification for the contact form submission.
 *
 * @param array $contactData
 * @return void
 */
private function sendContactFormNotification($contactData)
{
    $emailContent = "<p>You have received a new contact form submission:</p>";
    $emailContent .= "<ul>
        <li><strong>First Name:</strong> {$contactData['first_name']}</li>
        <li><strong>Last Name:</strong> {$contactData['last_name']}</li>
        <li><strong>Email:</strong> {$contactData['email']}</li>
        <li><strong>Phone:</strong> {$contactData['phone']}</li>
        <li><strong>Message:</strong> {$contactData['message']}</li>
    </ul>";

    $sesClient = new \Aws\Ses\SesClient([
        'version' => 'latest',
        'region'  => getenv('AWS_REGION'),
        'credentials' => [
            'key'    => getenv('AWS_ACCESS_KEY'),
            'secret' => getenv('AWS_SECRET_KEY'),
        ],
    ]);

    $adminEmail = "sr.developer@mvgdigital.com";

    try {
        $sesClient->sendEmail([
            'Source' => 'Sir Mutha School <tamilselvan.m@mvgdigital.in>',
            'Destination' => [
                'ToAddresses' => [$adminEmail],
            ],
            'Message' => [
                'Subject' => [
                    'Data' => 'New Contact Form Submission',
                    'Charset' => 'UTF-8',
                ],
                'Body' => [
                    'Html' => [
                        'Data' => $emailContent,
                        'Charset' => 'UTF-8',
                    ],
                ],
            ],
        ]);
    } catch (\Exception $e) {
        log_message('error', 'Failed to send email notification: ' . $e->getMessage());
    }
}
}