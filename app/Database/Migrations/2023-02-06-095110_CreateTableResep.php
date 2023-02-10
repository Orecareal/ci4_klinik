<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableResep extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],'berobat_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'obat_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ]
        ]);
        $this->forge->addKey('id');
        $this->forge->addForeignKey('berobat_id', 'berobat', 'id');
        $this->forge->addForeignKey('obat_id', 'obat', 'id');
        $this->forge->createTable('resep');
    }

    public function down()
    {
        //
        $this->forge->dropTable('resep');
    }
}
