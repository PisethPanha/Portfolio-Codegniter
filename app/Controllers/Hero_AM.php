<?php

namespace App\Controllers;

use App\Models\LogoModel;

class Hero_AM extends BaseController
{
    public function index(): string
    {
        $logoModel = new LogoModel();
        $data['logo'] = $logoModel -> findAll()[0];
        return view('admin/head')
        .view('admin/navigate')
        .view('admin/hero', $data)
        .view('admin/footer')
        ;
    }
}
