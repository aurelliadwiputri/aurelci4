<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Ulasanbuku extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'UlasanID' => [
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
            'Ulasan' =>[
                'type'=> 'Text',
            ],
            'Rating'=> [
                'type'=> 'INT',
                'constraint'=> 11,
            ],
        ]);

        $this->forge->addKey('UlasanID', TRUE); // Menambahkan primary key

        $this->forge->createTable('Ulasanbuku');
    }

    public function down()
    {
        $this->forge->dropTable('Ulasanbuku');
    }
}

