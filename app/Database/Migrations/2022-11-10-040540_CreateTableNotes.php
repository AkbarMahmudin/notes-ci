<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Notes extends Migration
{
    public function up()
    {
        // Create table
        $this->forge->addField([
            'id'    => [
                'type' => 'INT',
                'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true
            ],
            'title' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'content' => [
				'type'           => 'TEXT',
				'null'           => true,
			],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',
        ]);

        // Membuat primary key
		$this->forge->addKey('id', TRUE);

		// Membuat tabel ntoes
		$this->forge->createTable('notes', TRUE);
    }

    public function down()
    {
        // menghapus table
        $this->forge->dropTable('notes');
    }
}
