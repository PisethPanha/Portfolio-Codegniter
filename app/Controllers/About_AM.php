<?php

namespace App\Controllers;

use App\Models\aboutInfoModel;
use App\Models\clientModel;
use Cloudinary\Configuration\Configuration;
use Cloudinary\Api\Upload\UploadApi;
use Cloudinary\Cloudinary;

class About_AM extends BaseController
{
    protected $aboutInfoModel;
    public function __construct()
    {
        $this->aboutInfoModel = new aboutInfoModel();

   
        putenv('SSL_CERT_FILE=C:/Users/ICT/AppData/Local/Programs/PHP/current/extras/ssl/cacert-2.pem');
        putenv('CURL_CA_BUNDLE=C:/Users/ICT/AppData/Local/Programs/PHP/current/extras/ssl/cacert-2.pem');

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
        return view('admin/head')
            . view('admin/navigate')
            . view('admin/aboutMe')
            . view('admin/footer');
    }

    public function update()
    {
        $file = $this->request->getFile('cv');

        $jobTitle = $this->request->getPost('jobTitle');
        $bio      = $this->request->getPost('bio');
        $story    = $this->request->getPost('story');

        $updateData = [
            "job_title" => $jobTitle,
            "bio"       => $bio,
            "story"     => $story
        ];

        try {
            if ($file && $file->isValid()) {

                $allowedExt = ['pdf', 'doc', 'docx'];
                $ext = $file->getClientExtension();

                if (!in_array($ext, $allowedExt)) {
                     return "file format invalid !!!";
                }

               
                $filenameWithExt = time() . '.' . $ext;

              
                $uploadPath = FCPATH . 'uploads/';

                
                $file->move($uploadPath, $filenameWithExt);

                
                $updateData['cv'] = 'uploads/' . $filenameWithExt;
            }

            
            $this->aboutInfoModel->update(1, $updateData);

            return redirect()->to(route_to("admin/about"));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Update failed: ' . $e->getMessage());
        }
    }
}
