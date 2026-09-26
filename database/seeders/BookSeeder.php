<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'title' => 'Pemrograman PHP',
            'author' => 'Andi',
            'year' => 2004,
            'stock' => 5
        ]);

        Book::create([
            'title' => 'Algoritma dan Struktur Data',
            'author' => 'Ridwan',
            'year' => 2020,
            'stock' => 2
        ]);

        Book::create([
            'title' => 'Pemrograman Python',
            'author' => 'Agus',
            'year' => 2012,
            'stock' => 1
        ]);

        Book::create([
            'title' => 'Belajar MySQL',
            'author' => 'Rina',
            'year' => 2009,
            'stock' => 12
        ]);

        Book::create([
            'title' => 'Dasar-dasar Database',
            'author' => 'Lutpi',
            'year' => 2010,
            'stock' => 10
        ]);

        Book::create([
            'title' => 'Pemrograman Java',
            'author' => 'Doni',
            'year' => 2006,
            'stock' => 8
        ]);

        Book::create([
            'title' => 'Belajar Laravel',
            'author' => 'Budi',
            'year' => 2020,
            'stock' => 3
        ]);

        Book::create([
            'title' => 'Pemrograman C++',
            'author' => 'Rudi',
            'year' => 2005,
            'stock' => 4
        ]);

        Book::create([
            'title' => 'Pemrograman C',
            'author' => 'Rido',
            'year' => 2015,
            'stock' => 6
        ]);

        Book::create([
            'title' => 'Pemrograman JavaScript',
            'author' => 'Rudianto',
            'year' => 2018,
            'stock' => 9
        ]);
    }
}
