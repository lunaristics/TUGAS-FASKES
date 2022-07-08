<?php

namespace App\Controllers;

class Jenisfaskes extends BaseController
{
    public function index()
    {
        return view('layout/form_jenisfaskes');
    }

    public function save()
    {
        $data['nama'] = $this->request->getVar('nama');

        return view('data_jenisfaskes', $data);
    }
}