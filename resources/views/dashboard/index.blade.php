@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
    <h1>Library System Dashboard</h1>
    <p>Selamat datang di Sistem Informasi Perpustakaan.</p>

    <h2>Statistik Perpustakaan</h2>
    <ul>
        <li>Jumlah Buku: {{ $jumlahBuku }}</li>
        <li>Jumlah Member: {{ $jumlahMember }}</li>
        <li>Jumlah Kategori: {{ $jumlahKategori }}</li>
    </ul>
@endsection