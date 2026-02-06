<?php

namespace App\Controllers;

use App\Models\experienceModel;

class Experience_AM extends BaseController
{
    public function index(): string
    {
        $experienceModel = new experienceModel();
        $data['experience'] = $experienceModel -> findAll();
        return view('admin/head')
        .view('admin/navigate')
        .view('admin/experience', $data)
        .view('admin/footer')
        ;
    }
}
