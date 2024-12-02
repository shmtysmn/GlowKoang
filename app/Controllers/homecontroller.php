<?php

namespace App\Controllers;

use App\Models\ArtikelModel;
use App\Models\AktivitasModel;
use App\Models\ProdukModel;

class homecontroller extends BaseController
{
    public function beranda()
    {
        $artikelModel = new ArtikelModel();
        $aktivitasModel = new AktivitasModel();
        $produkModel = new ProdukModel();

        $data['artikels'] = $artikelModel->findAll();
        $data['aktivitas'] = $aktivitasModel->findAll();
        $data['produks'] = $produkModel->findAll();


        return view('beranda', $data); // Pastikan ada view beranda.php untuk menampilkan data
    }
}