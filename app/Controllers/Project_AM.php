<?php

namespace App\Controllers;

class Project_AM extends BaseController
{
    public function index(): string
    {
        return view('admin/head')
        .view('admin/navigate')
        .view('admin/project')
        .view('admin/footer')
        ;
    }
}
