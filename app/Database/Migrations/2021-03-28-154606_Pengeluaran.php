<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pengeluaran extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_pengeluaran'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'tgl_pengeluaran'       => [
				'type'       => 'DATE',
			],
			'id_sumber' => [
				'type' => 'INT',
				'constraint'     => 11,
			],
			'jumlah' => [
				'type' => 'INT',
				'constraint' => 11,
			],
			'created_at' => [
				'type' => 'DATETIME',
				'null' => true,
			],
			'updated_at' => [
				'type' => 'DATETIME',
				'null' => true,
			]
		]);
		$this->forge->addKey('id_pengeluaran', true);
		$this->forge->addForeignKey('id_sumber', 'sumber_pengeluaran', 'id_sumber');
		$this->forge->createTable('pengeluaran');
	}

	public function down()
	{
		$this->forge->dropTable('pengeluaran');
	}
}
