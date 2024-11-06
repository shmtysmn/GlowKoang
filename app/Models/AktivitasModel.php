<?php

namespace App\Models;

use CodeIgniter\Model;

class AktivitasModel extends Model
{
    protected $table = 'tb_aktivitas'; // Nama tabel di database
    protected $primaryKey = 'id_aktivitas'; // Primary key tabel
    protected $useAutoIncrement = true; // Menggunakan auto increment
    protected $allowedFields = [
        'nama_aktivitas_in',
        'nama_aktivitas_en',
        'foto_aktivitas',
        'deskripsi_aktivitas_in',
        'deskripsi_aktivitas_en'
    ]; // Kolom yang dapat diisi

    // Opsi timestamps otomatis jika ingin menggunakan created_at dan updated_at otomatis
    protected $useTimestamps = false; // Set ke true jika ada kolom created_at dan updated_at
    protected $createdField  = 'created_at'; // Jika ingin menambahkan kolom created_at
    protected $updatedField  = 'updated_at'; // Jika ingin menambahkan kolom updated_at

    // Pengaturan validasi
    protected $validationRules = [
        'nama_aktivitas_in' => 'required|max_length[200]',
        'nama_aktivitas_en' => 'required|max_length[200]',
        'foto_aktivitas' => 'required|max_length[100]',
        'deskripsi_aktivitas_in' => 'permit_empty', // Bisa diisi atau kosong
        'deskripsi_aktivitas_en' => 'permit_empty' // Bisa diisi atau kosong
    ];

    protected $validationMessages = [
        'nama_aktivitas_in' => [
            'required' => 'Nama aktivitas (bahasa Indonesia) wajib diisi.',
            'max_length' => 'Nama aktivitas (bahasa Indonesia) tidak boleh lebih dari 200 karakter.'
        ],
        'nama_aktivitas_en' => [
            'required' => 'Nama aktivitas (bahasa Inggris) wajib diisi.',
            'max_length' => 'Nama aktivitas (bahasa Inggris) tidak boleh lebih dari 200 karakter.'
        ],
        'foto_aktivitas' => [
            'required' => 'Foto aktivitas wajib diisi.',
            'max_length' => 'Foto aktivitas tidak boleh lebih dari 100 karakter.'
        ],
        'deskripsi_aktivitas_in' => [
            'permit_empty' => 'Deskripsi aktivitas (bahasa Indonesia) bisa diisi atau kosong.'
        ],
        'deskripsi_aktivitas_en' => [
            'permit_empty' => 'Deskripsi aktivitas (bahasa Inggris) bisa diisi atau kosong.'
        ]
    ];
}
