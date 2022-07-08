<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KecamatanModel;

class Kecamatan extends BaseController
{


    public function index()
    {
        return view('layout/form_kecamatan');
    }

    public function save()
    {
        $data['kecamatan'] = $this->request->getVar('kecamatan');

        return view('data_kecamatan', $data);
    }
}
