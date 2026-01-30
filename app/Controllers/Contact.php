<?php

namespace App\Controllers;

class Contact extends BaseController
{
    public function index(): string
    {
        return view('head')
                .view('navbar')
                .view('contact')
                .view('footer')
        ;
    }
}
