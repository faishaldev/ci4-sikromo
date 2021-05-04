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
			'tgl_hutang'       => [
				'type'       => 'DATE',
			],
			'penghutang' => [
				'type' => 'VARCHAR',
				'constraint' => 40,
				'collation' => 'latin1_swedish_ci',
			],
			'jumlah' => [
				'type' => 'INT',
				'constraint' => 11,
			],
			'keterangan' => [
				'type' => 'TEXT',
				'collation' => 'latin1_swedish_ci'
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
		$this->forge->addKey('id_hutang', true);
		$this->forge->createTable('hutang');
	}

	public function down()
	{
		$this->forge->dropTable('hutang');
	}
}
