<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pemasukan extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_pemasukan' => [
				'type'				=> 'INT',
				'constraint'		=> 11,
				'unsigned'			=> true,
				'auto_increment'	=> true,
			],
			'tgl_pemasukan' => [
				'type'	=> 'DATE',
			],
			'sumber' => [
				'type'			=> 'VARCHAR',
				'constraint'	=> 40,
				'collation'		=> 'latin1_swedish_ci',
			],
			'jumlah' => [
				'type'			=> 'INT',
				'constraint'	=> 11,
			],
			'keterangan' => [
				'type'		=> 'TEXT',
				'collation'	=> 'latin1_swedish_ci',
			],
			'created_at' => [
				'type'	=> 'DATETIME',
				'null'	=> TRUE,
			],
			'updated_at' => [
				'type'	=> 'DATETIME',
				'null'	=> TRUE,
			]
		]);
		$this->forge->addKey('id_pemasukan', true);
		$this->forge->createTable('pemasukan');
	}

	public function down()
	{
		$this->forge->dropTable('pemasukan');
	}
}
