<?php

namespace App\Controllers;

use App\Models\ArtikelModel;

class ArtikelController extends BaseController
{
    public function index()
    {
        $artikelModel = new ArtikelModel(); // Inisialisasi model di dalam metode
        $data['artikels'] = $artikelModel->findAll(); // Mengambil semua data artikel
        return view('artikel', $data);
    }

    public function show($id)
    {
        $artikelModel = new ArtikelModel(); // Inisialisasi model di dalam metode
        $data['artikel'] = $artikelModel->find($id); 
        dd($data);// Mengambil data artikel berdasarkan ID
        return view('artikel', $data);
    }
}