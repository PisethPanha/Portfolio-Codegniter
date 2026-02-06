<?php

namespace App\Controllers;

use App\Models\heroModel;
use App\Models\projectModel;
use Cloudinary\Configuration\Configuration;
use Cloudinary\Api\Upload\UploadApi;

class GetProjectCate extends BaseController
{
    public function index($cate)
    {
        $projectModel = new projectModel();
        $data['project'] = $projectModel->where('category', $cate)->findAll();
        $data['cate_num'] = $cate; 
        return view('head')
            . view('navbar')
            . view('projects', $data)
            . view('footer');
    }
}
