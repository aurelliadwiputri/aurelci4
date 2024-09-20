<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
class Kategoribuku extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'KategoriID' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE,
            ],
            'NamaKategori' => [
                'type' => 'VARCHAR',
                'constraint' => 225,
            ],
        ]);
        $this->forge->addKey('KategoriID', TRUE); // Menambahkan primary key

        $this->forge->createTable('Kategoribuku');
    }

    public function down()
    {
        $this->forge->dropTable('Kategoribuku');
    }
}
