<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableBerobat extends Migration
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
            ],'pasien_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'dokter_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'tgl_berobat' => [
                'type'       => 'DATETIME',
                'default'    => '1970-01-01 00:00:00',
            ],
            'date_created' => [
                'type'       => 'TIMESTAMP',
            ]
        ]);
        $this->forge->addKey('id');
        $this->forge->addForeignKey('pasien_id', 'pasien', 'id');
        $this->forge->addForeignKey('dokter_id', 'dokter', 'id');
        $this->forge->createTable('berobat');
    }

    public function down()
    {
        //
        $this->forge->dropTable('berobat');
    }
}
