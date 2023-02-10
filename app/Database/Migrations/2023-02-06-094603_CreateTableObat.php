<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableObat extends Migration
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
            ],
            'nama' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'date_created' => [
                'type'       => 'TIMESTAMP',
            ]
        ]);
        $this->forge->addKey('id');
        $this->forge->createTable('obat');
        
    }

    public function down()
    {
        //
        $this->forge->dropTable('obat');
    }
}
