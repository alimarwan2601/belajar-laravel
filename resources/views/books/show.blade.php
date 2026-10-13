@extends('layouts.app')

@section('content')
    <a href="{{ route('books.index') }}">Kembali ke Daftar Buku</a>
    <h2>{{ $book->title }}</h2>
    <p>Penulis: {{ $book->author }}</p>
    <p>Tahun: {{ $book->year }}</p>
    <p>Stok: {{ $book->stock }}</p>
@endsection