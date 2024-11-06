<?php

namespace App\Controllers;

use App\Models\AktivitasModel;

class AktivitasController extends BaseController
{
    public function index()
    {
        $aktivitasModel = new AktivitasModel(); // Inisialisasi model di dalam metode
        $data['aktivitas'] = $aktivitasModel->findAll(); // Mengambil semua data aktivitas
        return view('aktivitas', $data); // Ganti dengan view yang sesuai
    }

    public function show($id)
    {
        $aktivitasModel = new AktivitasModel(); // Inisialisasi model di dalam metode
        $data['aktivitas'] = $aktivitasModel->find($id); // Mengambil data aktivitas berdasarkan ID
        // Menampilkan data aktivitas untuk debugging
        dd($data); // Hapus ini setelah pengujian selesai
        return view('aktivitas', $data); // Ganti dengan view yang sesuai
    }
}
