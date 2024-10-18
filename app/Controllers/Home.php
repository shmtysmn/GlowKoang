<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('Beranda');
    }
    public function Tentang(): string
    {
        return view('Tentang');
    }
    
    public function Artikel1(): string
    {
        return view('Artikel1');
    }
    
    public function Produk(): string
    {
        return view('Produk');
    }
    public function Produk1(): string
    {
        return view('Produk1');
    }
    public function Aktivitas(): string
    {
        return view('Aktivitas');
    }
    public function Aktivitas1(): string
    {
        return view('Aktivitas1');
    }
   
    public function Kontak(): string
    {
        return view('Kontak');
    }
}
