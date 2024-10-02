<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TLibros extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_nombre' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'titulo' => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
            ],
            'autor' => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
            ],
            'publicacion' => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
            ],
            'genero' => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
            ],
        ]);
        $this->forge->addKey('id_nombre', true);
        $this->forge->createTable('TLibros');
    }

    public function down()
    {
        $this->forge->dropTable('TLibros');
    }
}
