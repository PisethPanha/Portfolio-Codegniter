<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index(): string
    {
        return view('admin/head')
        .view('admin/navigate')
        .view('admin/dashboard')
        .view('admin/footer')
        ;
    }
}
