<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class KecamatanSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama'              => 'Beji',
                
            ],
            [
                'nama'              => 'Margonda',
            ]
        ];
        $this->db->table('kecamatan')->insertBatch($data);
    }
}
