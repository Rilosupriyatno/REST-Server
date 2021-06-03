<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Menu extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_makanan'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'nama_makanan'       => [
				'type'       => 'VARCHAR',
				'constraint' => '100',
			],
			'descripsi_makanan' => [
				'type' => 'TEXT',
				'null' => true,
			],
		]);
		$this->forge->addKey('id_makanan', true);
		$this->forge->createTable('menu');
	}

	public function down()
	{
		$this->forge->dropTable('blog');
	}
}
