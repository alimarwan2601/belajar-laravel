@extends('layouts.app')

@section('content')
    <a href="{{ route('books.index') }}">Kembali ke Daftar Buku</a>
    <h2>Edit Buku</h2>

    <form action="{{ route('books.update', $book) }}" method="POST">
        @csrf
        @method('PUT')

        <input type="text" name="title" placeholder="Judul Buku" value="{{ $book->title }}">
        <input type="text" name="author" placeholder="Penulis" value="{{ $book->author }}">
        <input type="number" name="year" placeholder="Tahun" value="{{ $book->year }}">
        <input type="number" name="stock" placeholder="Stok" value="{{ $book->stock }}">

        <button type="submit">
            Update
        </button>
    </form>
@endsection