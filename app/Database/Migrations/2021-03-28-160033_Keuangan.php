<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Keuangan extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_keuangan'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'id_pendapatan'       => [
				'type'       => 'INT',
				'constraint' => 11,
				'null' => true,
			],
			'id_pengeluaran' => [
				'type' => 'INT',
				'constraint' => 11,
				'null' => true,
			],
			'tgl_keuangan' => [
				'type' => 'DATE'
			],
			'jumlah' => [
				'type' => 'INT',
				'constraint' => 11,
			]
		]);
		$this->forge->addKey('id_keuangan', true);
		$this->forge->createTable('keuangan');
	}

	public function down()
	{
		$this->forge->dropTable('keuangan');
	}
}
