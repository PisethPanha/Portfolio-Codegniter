<?php

namespace App\Controllers;

use App\Models\contactModel;

class Contact_AM extends BaseController
{
    public function index(): string
    {
        $contactModel = new contactModel();
        $data['contact'] = $contactModel->find(1);
        return view('admin/head')
            . view('admin/navigate')
            . view('admin/contact', $data)
            . view('admin/footer');
    }
    public function update()
    {
        $contactModel = new contactModel();
        $data = [
            "email" => $_POST['email'],
            "phone" => $_POST['phone'],
            "address" => $_POST['address'],
            "linkedin" => $_POST['linkedin'],
            "twitter" => $_POST['twitter'],
            "github" => $_POST['github']
        ];
        $contactModel->update(1, $data);
        return redirect()->back();
    }
   
}
