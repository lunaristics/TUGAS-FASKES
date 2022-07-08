<?php

namespace App\Models;

use CodeIgniter\Model;

class JenisFaskesModel extends Model
{
    protected $table = 'jenis_faskes';
    protected $primaryKey = 'id';
    protected $returnType = 'object';
    protected $useTimestamps = true;
    protected $allowedFields = ['id', 'nama'];
}
