<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SumberPemasukan extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_sumber'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'nama'       => [
				'type'       => 'VARCHAR',
				'constraint' => 40,
				'collation' => 'LATIN1_SWEDISH_CI',
			]
		]);
		$this->forge->addKey('id_sumber', true);
		$this->forge->createTable('sumber_pemasukan');
	}

	public function down()
	{
		$this->forge->dropTable('sumber_pemasukan');
	}
}
