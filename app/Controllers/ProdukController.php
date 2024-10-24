<?php

namespace App\Controllers;

use App\Models\ProdukModel;
use CodeIgniter\Controller;

class ProdukController extends Controller
{
    protected $produkModel;

    public function __construct()
    {
        // Inisialisasi model
        $this->produkModel = new ProdukModel();
    }

    // Menampilkan daftar produk
    public function index()
    {
        $data['produk'] = $this->produkModel->findAll(); // Ambil semua data produk
        return view('produk/index', $data); // Tampilkan view produk
    }

    // Menampilkan form untuk menambah produk
    public function create()
    {
        return view('produk/create'); // Tampilkan form untuk menambah produk
    }

    // Menyimpan produk baru
    public function store()
    {
        // Validasi input
        if (!$this->validate([
            'nama_produk_in' => 'required',
            'nama_produk_en' => 'required',
            'foto_produk' => 'uploaded[foto_produk]|is_image[foto_produk]|mime_in[foto_produk,image/jpg,image/jpeg,image/png]',
            'deskripsi_produk_in' => 'required',
            'deskripsi_produk_en' => 'required',
        ])) {
            return redirect()->back()->withInput(); // Jika validasi gagal, kembali ke form
        }

        // Upload foto produk
        $fotoProduk = $this->request->getFile('foto_produk');
        $namaFoto = $fotoProduk->getRandomName(); // Generate nama file acak
        $fotoProduk->move('uploads/produk/', $namaFoto); // Pindahkan file ke folder 'uploads/produk/'

        // Simpan data produk
        $this->produkModel->save([
            'nama_produk_in' => $this->request->getPost('nama_produk_in'),
            'nama_produk_en' => $this->request->getPost('nama_produk_en'),
            'foto_produk' => $namaFoto,
            'deskripsi_produk_in' => $this->request->getPost('deskripsi_produk_in'),
            'deskripsi_produk_en' => $this->request->getPost('deskripsi_produk_en')
        ]);

        return redirect()->to('/produk'); // Redirect ke halaman daftar produk
    }

    // Menampilkan form untuk mengedit produk
    public function edit($id_produk)
    {
        $data['produk'] = $this->produkModel->find($id_produk); // Ambil data produk berdasarkan ID
        return view('produk/edit', $data); // Tampilkan form edit
    }

    // Memperbarui data produk
    public function update($id_produk)
    {
        // Validasi input
        if (!$this->validate([
            'nama_produk_in' => 'required',
            'nama_produk_en' => 'required',
            'foto_produk' => 'is_image[foto_produk]|mime_in[foto_produk,image/jpg,image/jpeg,image/png]',
            'deskripsi_produk_in' => 'required',
            'deskripsi_produk_en' => 'required',
        ])) {
            return redirect()->back()->withInput(); // Jika validasi gagal, kembali ke form
        }

        // Cek jika ada file baru yang diupload
        $fotoProduk = $this->request->getFile('foto_produk');
        if ($fotoProduk->isValid() && !$fotoProduk->hasMoved()) {
            // Hapus foto lama jika ada
            $produk = $this->produkModel->find($id_produk);
            if (file_exists('uploads/produk/' . $produk['foto_produk'])) {
                unlink('uploads/produk/' . $produk['foto_produk']); // Hapus file foto lama
            }

            // Upload foto baru
            $namaFoto = $fotoProduk->getRandomName();
            $fotoProduk->move('uploads/produk/', $namaFoto);
        } else {
            // Jika tidak ada foto baru, tetap gunakan foto lama
            $namaFoto = $this->request->getPost('foto_lama');
        }

        // Update data produk
        $this->produkModel->update($id_produk, [
            'nama_produk_in' => $this->request->getPost('nama_produk_in'),
            'nama_produk_en' => $this->request->getPost('nama_produk_en'),
            'foto_produk' => $namaFoto,
            'deskripsi_produk_in' => $this->request->getPost('deskripsi_produk_in'),
            'deskripsi_produk_en' => $this->request->getPost('deskripsi_produk_en')
        ]);

        return redirect()->to('/produk'); // Redirect ke halaman daftar produk
    }

    // Menghapus produk
    public function delete($id_produk)
    {
        // Hapus foto produk dari server
        $produk = $this->produkModel->find($id_produk);
        if (file_exists('uploads/produk/' . $produk['foto_produk'])) {
            unlink('uploads/produk/' . $produk['foto_produk']); // Hapus file foto dari folder
        }

        // Hapus produk dari database
        $this->produkModel->delete($id_produk);

        return redirect()->to('/produk'); // Redirect ke halaman daftar produk
    }
}
