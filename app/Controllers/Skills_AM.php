<?php

namespace App\Controllers;

class Skills_AM extends BaseController
{
    public function index(): string
    {
        return view('admin/head')
        .view('admin/navigate')
        .view('admin/skill')
        .view('admin/footer')
        ;
    }
}
