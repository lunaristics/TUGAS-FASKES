<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Faskes extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'                    => [
                'type'              => 'INT',
                'constraint'        => 11,
                'unsigned'          => true,
                'auto_increment'    => true
            ],
            'nama'                   => [
                'type'              => 'VARCHAR',
                'constraint'        => '45'
            ],
            'alamat'                   => [
                'type'              => 'VARCHAR',
                'constraint'        => '200'
            ],
            'latlong'                   => [
                'type'              => 'VARCHAR',
                'constraint'        => '40'
            ],
            'jenis_id'                   => [
                'type'              => 'INT',
                'constraint'        => '11'
                'unsigned'          => true,
                'auto_increment'    => true
            ],
            'deskripsi'                   => [
                'type'              => 'text',
            ],
            'skor_rating'                   => [
                'type'              => 'double',
            ],
            'kecamatan_id'                   => [
                'type'              => 'INT',
                'constraint'        => '11'
                'unsigned'          => true,
                'auto_increment'    => true
            ],
            'website'                   => [
                'type'              => 'VARCHAR',
                'constraint'        => '45'
            ],
            'jumlah_dokter'                   => [
                'type'              => 'INT',
                'constraint'        => '11'
            ],
            'jumlah_pegawai'                   => [
                'type'              => 'INT',
                'constraint'        => '11'
            ]
        
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('faskes');
    }

    public function down()
    {
        $this->forge->dropTable('faskes');
    }
}
