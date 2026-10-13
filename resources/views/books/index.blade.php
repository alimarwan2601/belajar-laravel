@extends('layouts.app') 
@section('title', 'Daftar Buku') 
@section('content') 

    <a href="{{ route('books.create') }}">Tambah Buku</a>
    <h2>Daftar Buku</h2> 

    <ul> 
        @foreach($books as $book) 
        <li>
            <h3>{{ $book->title }}</h3>
            <a href="{{ route('books.show', $book) }}">Lihat Detail</a>
            <a href="{{ route('books.edit', $book) }}">Edit</a>
            <form action="{{ route('books.destroy', $book) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">
                    Hapus
                </button>
            </form>
        </li>
        @endforeach 
    </ul> 
@endsection 