@extends('layouts.app')

@section('content')
    <h2>Tambah Buku Baru</h2>

    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <input type="text" name="title" placeholder="Judul Buku">
        <input type="text" name="author" placeholder="Penulis">
        <input type="number" name="year" placeholder="Tahun">
        <input type="number" name="stock" placeholder="Stok">

        <button type="submit">
            Simpan
        </button>
    </form>
@endsection