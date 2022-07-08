<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class FaskesSeeder extends Seeder
{
    public function run()
    {
        $data=[
            [
                'nama'              => 'RS Grha Permata Ibu',
                'alamat'            => 'Jl. K.H.M. Usman No.168, Kukusan, Kecamatan Beji, Kota Depok, Jawa Barat 16425',
                'latlong'           => '-6.3706925,106.8134163',
                'deskripsi'         => 'Menjadi Rumah Sakit Terbaik dan Modern',
                'skor_rating'       => '4.8',
                'website'           => 'http://www.grhapermataibu.com/',
                'jumlah_dokter'     => '80',
                'jumlah_pegawai'    => '200',
            ]
    ];
    $this->db->table('faskes')->insertBatch($data);
    
        
    }
}
