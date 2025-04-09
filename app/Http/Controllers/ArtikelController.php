<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index()
    {
        $artikels = [
            [
                'judul' => 'Latar Belakang G30S/PKI',
                'slug' => 'latar-belakang-g30s',
                'gambar' => 'artikel1.jpg',
                'kutipan' => 'Sebuah analisis awal tentang penyebab munculnya G30S/PKI...'
            ],
            [
                'judul' => 'Dampak Politik G30S',
                'slug' => 'dampak-politik-g30s',
                'gambar' => 'artikel2.jpg',
                'kutipan' => 'Peristiwa G30S/PKI memberikan dampak besar terhadap arah politik Indonesia...'
            ],
        ];

        return view('artikel.index', compact('artikels'));
    }

    public function show($slug)
    {
        return view('artikel.show', compact('slug'));
    }
}
