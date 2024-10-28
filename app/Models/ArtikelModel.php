<?php

namespace App\Models;

use CodeIgniter\Model;

class ArtikelModel extends Model
{
    protected $table = 'tb_artikel'; // Nama tabel di database
    protected $primaryKey = 'id_artikel'; // Primary key tabel
    protected $useAutoIncrement = true; // Menggunakan auto increment
    protected $allowedFields = [
        'judul_artikel',
        'foto_artikel',
        'deskripsi_artikel',
        'created_at',
        'judul_artikel_en',
        'deskripsi_artikel_en'
    ]; // Kolom yang dapat diisi

    // Opsi timestamps otomatis jika ingin menggunakan created_at dan updated_at otomatis
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at'; // Optional, tambahkan kolom ini di tabel jika diperlukan

    // Pengaturan validasi
    protected $validationRules = [
        'judul_artikel' => 'required|max_length[100]',
        'foto_artikel' => 'required|max_length[255]',
        'deskripsi_artikel' => 'required',
        'judul_artikel_en' => 'required|max_length[100]',
        'deskripsi_artikel_en' => 'required'
    ];

    protected $validationMessages = [
        'judul_artikel' => [
            'required' => 'Judul artikel wajib diisi.',
            'max_length' => 'Judul artikel tidak boleh lebih dari 100 karakter.'
        ],
        'foto_artikel' => [
            'required' => 'Foto artikel wajib diisi.',
            'max_length' => 'Foto artikel tidak boleh lebih dari 255 karakter.'
        ],
        'deskripsi_artikel' => [
            'required' => 'Deskripsi artikel wajib diisi.'
        ],
        'judul_artikel_en' => [
            'required' => 'Judul artikel dalam bahasa Inggris wajib diisi.',
            'max_length' => 'Judul artikel bahasa Inggris tidak boleh lebih dari 100 karakter.'
        ],
        'deskripsi_artikel_en' => [
            'required' => 'Deskripsi artikel dalam bahasa Inggris wajib diisi.'
        ]
    ];
}