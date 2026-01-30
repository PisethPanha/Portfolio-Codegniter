<?php

namespace App\Controllers;

class ProjectFrm extends BaseController
{
    public function index(): string
    {
        return view('admin/head')
        .view('admin/navigate')
        .view('admin/projectFrm')
        .view('admin/footer')
        ;
    }
}