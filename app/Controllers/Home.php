<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('head')
                .view('navbar')
                .view('welcome_message')
                .view('footer')
        ;
    }
}
