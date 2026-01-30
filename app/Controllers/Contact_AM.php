<?php

namespace App\Controllers;

class Contact_AM extends BaseController
{
    public function index(): string
    {
        return view('admin/head')
        .view('admin/navigate')
        .view('admin/contact')
        .view('admin/footer')
        ;
    }
}
