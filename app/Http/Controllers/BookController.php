<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = [
        ['judul' => 'Pemrograman PHP', 'penulis' => 'Budi Raharjo', 'tahun' => 2022],
        ['judul' => 'Laravel untuk Pemula', 'penulis' => 'Taufik Ramadhan', 'tahun' => 2023],
        ['judul' => 'Basis Data', 'penulis' => 'Fathansyah', 'tahun' => 2021],
        ['judul' => 'Algoritma dan Pemrograman', 'penulis' => 'Rosa A.S.', 'tahun' => 2022],
        ['judul' => 'Pemrograman Berorientasi Objek', 'penulis' => 'Abdul Kadir', 'tahun' => 2021],
        ['judul' => 'Keamanan Sistem Informasi', 'penulis' => 'Dony Ariyus', 'tahun' => 2023],
        ['judul' => 'Jaringan Komputer', 'penulis' => 'Melwin Syafrizal', 'tahun' => 2020],
        ['judul' => 'Rekayasa Perangkat Lunak', 'penulis' => 'Rosa A.S.', 'tahun' => 2021] 
        ];

        $stock = 7;

        return view('books.index', compact('books', 'stock'));
    }

    public function show($id) 
    { 
        return 'Detail Buku<br>ID Buku: ' . $id;
    } 

}
