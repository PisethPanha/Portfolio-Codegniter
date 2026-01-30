<?php

namespace App\Controllers;

class ExperienceFrm extends BaseController
{
    public function index(): string
    {
        return view('admin/head')
        .view('admin/navigate')
        .view('admin/experienceFrm')
        .view('admin/footer')
        ;
    }
}