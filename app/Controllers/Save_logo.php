<?php

namespace App\Controllers;

use App\Models\LogoModel;

class Save_logo extends BaseController
{
    public function index()
    {
        $logoModel = new LogoModel();
        $data = [
            'short_name' => $_POST['shortName'],
            'long_name' => $_POST['longName'],
            'font_style' => $_POST['fontStyle'],
            'font_weight' => $_POST['fontWeight'],
            'color' => $_POST['color']
           
        ];

        $logoModel->update(12, $data);
        return redirect()-> to(base_url('admin/branding'));
    //    return print_r($data);



    }
}
