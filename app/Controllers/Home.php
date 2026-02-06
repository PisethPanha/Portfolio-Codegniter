<?php

namespace App\Controllers;

use App\Models\heroModel;
use Cloudinary\Configuration\Configuration;
use Cloudinary\Api\Upload\UploadApi;

class Home extends BaseController
{
    public function index(): string
    {
        return view('head')
                .view('navbar')
                .view('welcome_message')
                .view('footer')
        ;
    }
}
