<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdukModel extends Model
{
    protected $table      = 'tb_produk';           // Nama tabel
    protected $primaryKey = 'id_produk';           // Primary key

    // Field yang boleh diisi atau dimasukkan melalui input form
    protected $allowedFields = [
        'nama_produk_in',
        'nama_produk_en',
        'foto_produk',
        'deskripsi_produk_in',
        'deskripsi_produk_en',
        'created_at',
        'updated_at'
    ];

    // Timestamps otomatis mengisi created_at dan updated_at
    protected $useTimestamps = true;

    // Jika ada soft deletes (opsional), kamu bisa tambahkan ini
    // protected $useSoftDeletes = true;

    // Metode tambahan jika diperlukan, seperti validasi data
}
