<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class JenisFaskes extends Migration
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
                'constraint'        => '30'
            ]
            ]);
            $this->forge->addPrimaryKey('id');
            $this->forge->createTable('jenis_faskes');
    }

    public function down()
    {
        $this->forge->dropTable('jenis_faskes');
    }
}
