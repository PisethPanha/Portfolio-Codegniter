<?php

namespace App\Controllers;

class Client_AM extends BaseController
{
    public function index(): string
    {
        return view('admin/head')
        .view('admin/navigate')
        .view('admin/client')
        .view('admin/footer')
        ;
    }
}
