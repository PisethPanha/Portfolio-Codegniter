<?php

namespace App\Controllers;

use App\Models\clientModel;

class Client_AM extends BaseController
{
    public function index(): string
    {
        $clientModel = new clientModel();
        $data['client'] = $clientModel->findAll();
        return view('admin/head')
            . view('admin/navigate')
            . view('admin/client', $data)
            . view('admin/footer');
    }
    public function get($id)
    {
        $clientModel = new clientModel();
        return redirect()->to("admin/client")
            ->with('client2', $clientModel->find($id))
            ->with('client', $clientModel->findAll())
        ;
    }
    public function delete($id)
    {
        $clientModel = new clientModel();
        $clientModel->delete($id);
        return redirect()->to("admin/client");
    }
    public function save()
    {
        $clientModel = new clientModel();
        $data = [
            "name" => $_POST['name'],
            "email" => $_POST['email'],
            "subject" => $_POST['subject'],
            "description" => $_POST['message']
        ];
        $clientModel->insert($data);
        return view('head')
            . view('thank_contact_view')
            . view('footer');
    }
}
