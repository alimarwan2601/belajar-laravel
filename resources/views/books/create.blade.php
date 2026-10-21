@extends('layouts.app')

@section('content')
    <h2>Tambah Buku Baru</h2>

    <form action="{{ route('books.store') }}" method="POST">
        @csrf

        <div>
            <label> Judul Buku</label>
            <input type="text" name="title" placeholder="Judul Buku" value="{{ old('title') }}">

            @error('title')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label> Penulis</label>
            <input type="text" name="author" placeholder="Penulis" value="{{ old('author') }}">

            @error('author')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label> Tahun</label>
            <input type="number" name="year" placeholder="Tahun" value="{{ old('year') }}">

            @error('year')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label> Stok</label>
            <input type="number" name="stock" placeholder="Stok" value="{{ old('stock') }}">

            @error('stock')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <button type="submit">
            Simpan
        </button>
    </form>
@endsection