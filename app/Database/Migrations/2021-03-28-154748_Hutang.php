<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Hutang extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_hutang'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'penghutang'       => [
				'type'       => 'VARCHAR',
				'constraint' => 40,
				'collation' => 'LATIN1_SWEDISH_CI',
			],
			'tgl_hutang' => [
				'type' => 'DATE',
			],
			'jumlah' => [
				'type' => 'INT',
				'constraint' => 11,
			],
			'alasan' => [
				'type' => 'TEXT',
				'collation' => 'LATIN1_SWEDISH_CI',
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
		$this->forge->addKey('id_hutang', true);
		$this->forge->createTable('hutang');
	}

	public function down()
	{
		$this->forge->dropTable('hutang');
	}
}
