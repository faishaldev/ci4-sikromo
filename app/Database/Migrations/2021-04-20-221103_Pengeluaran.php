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
			'keterangan' => [
				'type' => 'TEXT',
				'collation' => 'latin1_swedish_ci',
			],
			'jumlah' => [
				'type' => 'INT',
				'constraint' => 11,
			],
			'created_at' => [
				'type' => 'DATETIME',
				'null' => TRUE,
			],
			'updated_at' => [
				'type' => 'DATETIME',
				'null' => TRUE,
			]
		]);
		$this->forge->addKey('id_pengeluaran', true);
		$this->forge->createTable('pengeluaran');
	}

	public function down()
	{
		$this->forge->dropTable('pengeluaran');
	}
}
