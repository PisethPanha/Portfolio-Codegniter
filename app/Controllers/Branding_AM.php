<?php

namespace App\Controllers;

use App\Models\LogoModel;

class Branding_AM extends BaseController
{
    public function index(): string
    {
        $logoModel = new LogoModel();
        $data['logo'] = $logoModel -> findAll()[0];
        return view('admin/head')
        .view('admin/navigate')
        .view('admin/branding')
        .view('admin/footer')
        ;
    }
}
