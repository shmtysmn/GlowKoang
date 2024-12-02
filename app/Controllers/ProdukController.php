<?php

namespace App\Controllers;

use App\Models\ProdukModel;

class ProdukController extends BaseController
{
    public function index()
    {
        $lang = $this->request->getGet('lang') ?? 'id'; // Default ke 'id' jika parameter 'lang' tidak ada
        $produkModel = new ProdukModel(); // Inisialisasi model
    
        // Pilih kolom berdasarkan bahasa yang dipilih
        if ($lang == 'en') {
            $data['produks'] = $produkModel->select('id_produk, nama_produk_en AS nama_produk, deskripsi_produk_en AS deskripsi_produk, foto_produk, slug')->findAll();
        } else {
            $data['produks'] = $produkModel->select('id_produk, nama_produk_in AS nama_produk, deskripsi_produk_in AS deskripsi_produk, foto_produk, slug')->findAll();
        }
        return view('produk', $data); // Ganti dengan view yang sesuai
    }

    public function show($id)
    {
        $produkModel = new ProdukModel(); // Inisialisasi model di dalam metode
        $data['produk'] = $produkModel->find($id); // Mengambil data produk berdasarkan ID
        dd($data);
        return view('produk', $data); // Ganti dengan view yang sesuai
    }
    public function detail($slug)
    {
        $produkModel = new ProdukModel();
        $produk = $produkModel->where('slug', $slug)->first();

        if (!$produk) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Produk tidak ditemukan");
        }

        return view('detail_produk', ['produk' => $produk]);
    } 
}
