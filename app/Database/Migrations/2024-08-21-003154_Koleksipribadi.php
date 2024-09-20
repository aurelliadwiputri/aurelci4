<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Koleksipribadi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'KoleksiId' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE,
            ],
            'UserId' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'BukuId' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
        ]);

        $this->forge->addKey('KoleksiId', TRUE); // Menambahkan primary key

        $this->forge->createTable('koleksipribadi');
    }

    public function down()
    {
        $this->forge->dropTable('koleksipribadi');
    }
}

