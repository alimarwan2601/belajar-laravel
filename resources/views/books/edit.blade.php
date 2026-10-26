@extends('layouts.app')

@section('content')
    <a href="{{ route('books.index') }}">Kembali ke Daftar Buku</a>
    <h2>Edit Buku</h2>

    <form action="{{ route('books.update', $book) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label> Judul Buku</label>
            <input type="text" name="title" placeholder="Judul Buku" value="{{ $book->title }}">

            @error('title')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label> Penulis</label>
            <input type="text" name="author" placeholder="Penulis" value="{{ $book->author }}">

            @error('author')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label> Tahun</label>
            <input type="number" name="year" placeholder="Tahun" value="{{ $book->year }}">

            @error('year')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label> Stok</label>
            <input type="number" name="stock" placeholder="Stok" value="{{ $book->stock }}">

            @error('stock')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label> Kategori</label>
            <select name="category_id">
                <option value="">Pilih Kategori</option>
                @foreach ($categories as $category)
                    <option
                    value="{{ $category->id }}"
                    @selected(old('category_id', $book->category_id) == $category->id)
                    >
                    {{ $category->name }}
                    </option>
                @endforeach
            </select>

            @error('category_id')
                <p>{{ $message }}</p>
            @enderror

        <button type="submit">
            Update
        </button>
    </form>
@endsection