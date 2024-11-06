<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TbProduk extends Migration
{
    public function up()
    {
        // Definisikan struktur tabel tb_produk
        $this->forge->addField([
            'id_produk' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_produk_in' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'nama_produk_en' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'foto_produk' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true, // Dapat diisi null jika foto tidak ada
            ],
            'deskripsi_produk_in' => [
                'type'       => 'TEXT',
                'null'       => true, // Dapat diisi null jika tidak ada deskripsi
            ],
            'deskripsi_produk_en' => [
                'type'       => 'TEXT',
                'null'       => true, // Dapat diisi null jika tidak ada deskripsi
            ],
        ]);

        // Tambahkan primary key pada id_produk
        $this->forge->addKey('id_produk', true);

        // Buat tabel tb_produk
        $this->forge->createTable('tb_produk');
    }

    public function down()
    {
        // Drop tabel tb_produk jika migrasi dibatalkan
        $this->forge->dropTable('tb_produk');
    }
}
