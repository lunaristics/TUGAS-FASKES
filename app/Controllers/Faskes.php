<?php

namespace App\Controllers;

class Faskes extends BaseController
{


    public function index()
    {
        return view('layout/form_faskes');
    }

    public function save()
    {
        $data['nama'] = $this->request->getVar('nama');
        $data['alamat'] = $this->request->getVar('alamat');
        $data['latlong'] = $this->request->getVar('latlong');
        $data['jenis_faskes'] = $this->request->getVar('jenis_faskes');
        $data['Deskripsi'] = $this->request->getVar('Deskripsi');
        $data['SkorRating'] = $this->request->getVar('SkorRating');
        $data['Website'] = $this->request->getVar('Website');
        $data['JumlahDokter'] = $this->request->getVar('JumlahDokter');
        $data['JumlahPegawai'] = $this->request->getVar('JumlahPegawai');

        return view('data_faskes', $data);
    }
}