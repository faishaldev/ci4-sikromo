<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Karyawan extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_karyawan' => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'nama' => [
				'type'			=> 'VARCHAR',
				'constraint'	=> 40,
				'collation'		=> 'latin1_swedish_ci',
			],
			'umur' => [
				'type'			=> 'INT',
				'constraint'	=> 11,
			],
			'kontak' => [
				'type'			=> 'VARCHAR',
				'constraint'	=> 40,
				'collation'		=> 'latin1_swedish_ci',
			],
			'posisi' => [
				'type'			=> 'VARCHAR',
				'constraint'	=> 40,
				'collation'		=> 'latin1_swedish_ci',
			],
			'alamat' => [
				'type'			=> 'VARCHAR',
				'constraint'	=> 40,
				'collation'		=> 'latin1_swedish_ci',
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
		$this->forge->addKey('id_karyawan', true);
		$this->forge->createTable('karyawan');
	}

	public function down()
	{
		$this->forge->dropTable('karyawan');
	}
}
