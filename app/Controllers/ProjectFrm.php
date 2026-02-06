<?php

namespace App\Controllers;

use App\Models\projectModel;
use App\Models\LogoModel;
use App\Models\skillModel;
use Cloudinary\Configuration\Configuration;
use Cloudinary\Api\Upload\UploadApi;

class ProjectFrm extends BaseController
{
    protected $projectModel;
    protected $skillModel;
    public function index(): string
    {   
        $data['skill'] = $this->skillModel->findAll();
        return view('admin/head')
            . view('admin/navigate')
            . view('admin/projectFrm', $data)
            . view('admin/footer');
    }
    public function edit($id): string
    {
        $data['project'] = $this->projectModel->find($id);
        $data['skill'] = $this->skillModel->findAll();
        return view('admin/head')
            . view('admin/navigate')
            . view('admin/projectFrm', $data)
            . view('admin/footer');
    }
    public function delete($id)
    {
        $this->projectModel->delete($id);
        return redirect()->to(base_url('admin/project'));
    }

    public function __construct()
    {
        $this->projectModel = new projectModel();
        $this->skillModel = new skillModel();

        // SSL fix for Windows cURL
        putenv('SSL_CERT_FILE=C:/Users/ICT/AppData/Local/Programs/PHP/current/extras/ssl/cacert-2.pem');
        putenv('CURL_CA_BUNDLE=C:/Users/ICT/AppData/Local/Programs/PHP/current/extras/ssl/cacert-2.pem');

        // Cloudinary configuration
        Configuration::instance([
            'cloud' => [
                'cloud_name' => env('CLOUDINARY_CLOUD_NAME'),
                'api_key'    => env('CLOUDINARY_API_KEY'),
                'api_secret' => env('CLOUDINARY_API_SECRET'),
            ],
            'url' => ['secure' => true],
        ]);
    }
    public function save()
    {
        $file = $this->request->getFile('image');

        if (!$file || !$file->isValid()) {
            // return redirect()->back()->with('error', 'Invalid image uploaded');
            // $this->heroModel->update(1, [
            //     'name'       => $this->request->getPost('fullName'),
            //     'job_title'  => $this->request->getPost('jobTitle'),
            //     'short_bio'  => $this->request->getPost('shortBio')  
            // ]);
            // return redirect()->back()->with('success', 'Image uploaded & saved successfully');
            return "Image required!!";
        }

        try {
            // Force SSL CA in case php.ini is ignored
            putenv('SSL_CERT_FILE=C:/Users/ICT/AppData/Local/Programs/PHP/current/extras/ssl/cacert-2.pem');
            putenv('CURL_CA_BUNDLE=C:/Users/ICT/AppData/Local/Programs/PHP/current/extras/ssl/cacert-2.pem');

            // Upload to Cloudinary
            $result = (new UploadApi())->upload(
                $file->getTempName(),
                [
                    'folder' => 'ci4_uploads',
                    'transformation' => [
                        'width' => 800,
                        'height' => 800,
                        'crop' => 'limit',
                        'quality' => 'auto',
                        'fetch_format' => 'auto'
                    ]
                ]
            );

            // Save to DB
            $data = [
                'name' => $_POST['name'],
                'description' => $_POST['description'],
                'stack' => $_POST['stack'],
                'image' => $result['secure_url'],
                'category' => $_POST['category'],
                'demo_link' => $_POST['demoLink'],
                'github' => $_POST['github']

            ];

            $this->projectModel->insert($data);
            return redirect()->to(base_url('admin/project'));
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
    public function update()
    {
        $file = $this->request->getFile('image');

        if (!$file || !$file->isValid()) {

            $data = [
                'name' => $_POST['name'],
                'description' => $_POST['description'],
                'stack' => $_POST['stack']

            ];

            $this->projectModel->update($_POST['id'], $data);
            return redirect()->to(base_url('admin/project'));
        }

        try {
            // Force SSL CA in case php.ini is ignored
            putenv('SSL_CERT_FILE=C:/Users/ICT/AppData/Local/Programs/PHP/current/extras/ssl/cacert-2.pem');
            putenv('CURL_CA_BUNDLE=C:/Users/ICT/AppData/Local/Programs/PHP/current/extras/ssl/cacert-2.pem');

            // Upload to Cloudinary
            $result = (new UploadApi())->upload(
                $file->getTempName(),
                [
                    'folder' => 'ci4_uploads',
                    'transformation' => [
                        'width' => 800,
                        'height' => 800,
                        'crop' => 'limit',
                        'quality' => 'auto',
                        'fetch_format' => 'auto'
                    ]
                ]
            );

            // Save to DB
            $data = [
                'name' => $_POST['name'],
                'description' => $_POST['description'],
                'stack' => $_POST['stack'],
                'image' => $result['secure_url']

            ];

            $this->projectModel->update($_POST['id'], $data);
            return redirect()->to(base_url('admin/project'));
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
