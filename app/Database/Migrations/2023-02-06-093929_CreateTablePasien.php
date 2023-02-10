<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTablePasien extends Migration
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
            'jen_kel' => [
                'type'       => 'ENUM',
                'constraint' => ['L', 'P'],
                'default'    => 'L',
            ],
            'umur' => [
                'type'       => 'INT',
                'constraint' => '2',
            ],
            'date_created' => [
                'type'       => 'TIMESTAMP',
            ]
        ]);
        $this->forge->addKey('id');
        $this->forge->createTable('pasien');
    }

    public function down()
    {
        //
        $this->forge->dropTable('pasien');
    }
}
