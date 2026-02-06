<?php

namespace App\Controllers;

use App\Models\LogoModel;
use App\Models\HeroModel;
use Cloudinary\Configuration\Configuration;
use Cloudinary\Api\Upload\UploadApi;

class Hero_AM extends BaseController
{
    protected $heroModel;
    protected $logoModel;

    public function __construct()
    {
        $this->heroModel = new HeroModel();
        $this->logoModel = new LogoModel();

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

    public function index(): string
    {
        $data['hero'] = $this->heroModel->findAll()[0] ?? null;

        return view('admin/head')
            . view('admin/navigate')
            . view('admin/hero', $data)
            . view('admin/footer');
    }

    public function UpdateHero()
    {
        $file = $this->request->getFile('image');

        if (!$file || !$file->isValid()) {
            // return redirect()->back()->with('error', 'Invalid image uploaded');
            $this->heroModel->update(1, [
                'name'       => $_POST['fullName'],
                'job_title'  => $_POST['jobTitle'],
                'short_bio'  => $_POST['shortBio'],
                'experience'  => $_POST['experienceYear'],
                'satisfaction'  => $_POST['satisfaction']
                
            ]);
            return redirect()->to("admin/hero");
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
            $this->heroModel->update(1, [
                'name'       => $_POST['fullName'],
                'job_title'  => $_POST['jobTitle'],
                'short_bio'  => $_POST['shortBio'],
                'experience'  => $_POST['experienceYear'],
                'satisfaction'  => $_POST['satisfaction'],
                'image'      => $result['secure_url'],
                'public_id'  => $result['public_id']
            ]);

            return redirect()->to("admin/hero");
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
