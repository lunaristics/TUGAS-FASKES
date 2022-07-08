<?php

namespace App\Models;

use CodeIgniter\Model;

class FaskesModel extends Model
{
    protected $table = 'faskes';
    protected $primaryKey = 'id';
    protected $returnType = 'object';
    protected $useTimestamps = true;
    protected $allowedFields = ['id', 'nama', 'alamat', 'latlong', 'jenis_faskes' 'deskripsi', 'skor_rating', 'website', 'jumlah_dokter', 'jumlah_pegawai'];
}