<?php

namespace App\Controllers;

use App\Models\LogoModel;

class Save_logo extends BaseController
{
    public function index()
    {
        $logoModel = new LogoModel();
        $data['logo'] = $logoModel->findAll();


    print_r($data['logo']) ;

   

    }
}
