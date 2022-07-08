<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class JenisFaskesSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama'              => 'Rumah Sakit',
                
            ],
            [
                'nama'              => 'Klinik Gigi',
            ],
            [
                'nama'              => 'Klinik Umum',
            ],
            [
                'nama'              => 'Puskesmas',
            ],
            [
                'nama'              => 'Apotik',
            ]
        ];
        $this->db->table('jenis_faskes')->insertBatch($data);
    }
    }

