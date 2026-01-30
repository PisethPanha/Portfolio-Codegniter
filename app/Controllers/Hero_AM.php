<?php

namespace App\Controllers;

class Hero_AM extends BaseController
{
    public function index(): string
    {
        return view('admin/head')
        .view('admin/navigate')
        .view('admin/hero')
        .view('admin/footer')
        ;
    }
}
