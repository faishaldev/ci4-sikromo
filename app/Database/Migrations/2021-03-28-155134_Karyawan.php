<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Karyawan extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_karyawan'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'nama'       => [
				'type'       => 'VARCHAR',
				'constraint' => 40,
				'collation' => 'LATIN1_SWEDISH_CI',
			],
			'kontak' => [
				'type' => 'VARCHAR',
				'constraint'     => 40,
				'collation' => 'LATIN1_SWEDISH_CI',
			],
			'posisi' => [
				'type' => 'VARCHAR',
				'constraint' => 40,
				'collation' => 'LATIN1_SWEDISH_CI',
			],
			'alamat' => [
				'type' => 'VARCHAR',
				'constraint' => 40,
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
		$this->forge->addKey('id_karyawan', true);
		$this->forge->createTable('karyawan');
	}

	public function down()
	{
		$this->forge->dropTable('karyawan');
	}
}
