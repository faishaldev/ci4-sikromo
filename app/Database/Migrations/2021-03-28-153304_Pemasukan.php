<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pemasukan extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_pemasukan'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'tgl_pemasukan'       => [
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
		$this->forge->addKey('id_pemasukan', true);
		$this->forge->addForeignKey('id_sumber', 'sumber_pemasukan', 'id_sumber');
		$this->forge->createTable('pemasukan');
	}

	public function down()
	{
		$this->forge->dropTable('pemasukan');
	}
}
