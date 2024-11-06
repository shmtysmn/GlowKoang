<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdukModel extends Model
{
    protected $table = 'tb_produk'; // Nama tabel di database
    protected $primaryKey = 'id_produk'; // Primary key tabel
    protected $useAutoIncrement = true; // Menggunakan auto increment
    // Field yang boleh diisi atau dimasukkan melalui input form
    protected $allowedFields = [
        'nama_produk_in',
        'nama_produk_en',
        'foto_produk',
        'deskripsi_produk_in',
        'deskripsi_produk_en',
        'created_at',
        'updated_at'
    ]; // Kolom yang dapat diisi
    // Opsi timestamps otomatis untuk created_at dan updated_at
    protected $useTimestamps = true;
    protected $createdField  = 'created_at'; // Kolom untuk waktu pembuatan
    protected $updatedField  = 'updated_at'; // Kolom untuk waktu pembaruan
    // Pengaturan validasi
    protected $validationRules = [
        'nama_produk_in' => 'required|max_length[200]',
        'nama_produk_en' => 'required|max_length[200]',
        'foto_produk' => 'required|max_length[100]',
        'deskripsi_produk_in' => 'permit_empty',
        'deskripsi_produk_en' => 'permit_empty'
    ];

    protected $validationMessages = [
        'nama_produk_in' => [
            'required' => 'Nama produk dalam bahasa Indonesia wajib diisi.',
            'max_length' => 'Nama produk dalam bahasa Indonesia tidak boleh lebih dari 200 karakter.'
        ],
        'nama_produk_en' => [
            'required' => 'Nama produk dalam bahasa Inggris wajib diisi.',
            'max_length' => 'Nama produk dalam bahasa Inggris tidak boleh lebih dari 200 karakter.'
        ],
        'foto_produk' => [
            'required' => 'Foto produk wajib diisi.',
            'max_length' => 'Foto produk tidak boleh lebih dari 100 karakter.'
        ],
        'deskripsi_produk_in' => [
            'permit_empty' => 'Deskripsi produk dalam bahasa Indonesia boleh kosong.'
        ],
        'deskripsi_produk_en' => [
            'permit_empty' => 'Deskripsi produk dalam bahasa Inggris boleh kosong.'
        ]
    ];
}
