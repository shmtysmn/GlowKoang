<?php

namespace App\Controllers;

use App\Models\ArtikelModel;

class ArtikelController extends BaseController
{
    public function index()
    {
        $artikelModel = new ArtikelModel(); // Inisialisasi model di dalam metode
        $data['artikels'] = $artikelModel->findAll(); // Mengambil semua data artikel
        return view('artikel', $data); // Menampilkan view artikel.php
    }

    public function beranda()
    {
        $artikelModel = new ArtikelModel(); // Inisialisasi model di dalam metode
        $data['artikels'] = $artikelModel->findAll(); // Mengambil semua data artikel
        return view('beranda', $data); // Menampilkan view beranda.php
    }

    public function detail($slug)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('tb_artikel');

        // Ambil artikel berdasarkan slug
        $artikel = $builder->where('slug', $slug)->get()->getRow();

        if ($artikel) {
            // Ambil artikel terkait (contoh berdasarkan tanggal atau kategori)
            $related_articles = $builder->where('slug !=', $slug)
                ->orderBy('created_at', 'DESC')
                ->limit(3) // Maksimal 3 artikel terkait
                ->get()
                ->getResult();

            // Kirim data ke view
            return view('detail_artikel', [
                'artikel' => $artikel,
                'related_articles' => $related_articles, // Artikel terkait
            ]);
        } else {
            // Jika artikel tidak ditemukan, tampilkan halaman error 404
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Artikel tidak ditemukan.');
        }
    }


}