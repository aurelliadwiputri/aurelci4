<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class KategoribukuRelasi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'KategoriBukuID' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE,
            ],
            'BukuId' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'KategoriId' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
        ]);
        $this->forge->addKey('KategoriBukuID', TRUE); // Menambahkan primary key

        $this->forge->createTable('KategoriBukuRelasi');
    }

    public function down()
    {
        $this->forge->dropTable('KategoriBukuRelasi');
    }
}

