<?php

namespace App\Controllers;

class Experience_AM extends BaseController
{
    public function index(): string
    {
        return view('admin/head')
        .view('admin/navigate')
        .view('admin/experience')
        .view('admin/footer')
        ;
    }
}
