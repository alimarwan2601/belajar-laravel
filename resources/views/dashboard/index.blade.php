@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
    <h1>Library System Dashboard</h1>
    <p>Selamat datang di Sistem Informasi Perpustakaan.</p>
    <p>Jumlah Buku: {{ $jumlahBuku }}</p>
    <p>Jumlah Member: {{ $jumlahMember }}</p>
    <p>Jumlah Kategori: {{ $jumlahKategori }}</p>
@endsection