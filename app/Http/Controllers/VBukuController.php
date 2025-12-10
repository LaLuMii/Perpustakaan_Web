<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VBukuController extends Controller
{
    public function index()
    {
        $books = [
            [
                'title'  => 'Laskar Pelangi',
                'author' => 'Andrea Hirata',
                'year'   => 2005,
                'type'   => 'Novel',
                'genre'  => 'Drama',
                'image'  => '/images/books/laskar-pelangi.jpg'
            ],
            [
                'title'  => 'Bumi',
                'author' => 'Tere Liye',
                'year'   => 2014,
                'type'   => 'Novel',
                'genre'  => 'Fantasi',
                'image'  => '/images/books/bumi.jpg'
            ],
            [
                'title'  => 'Negeri 5 Menara',
                'author' => 'A. Fuadi',
                'year'   => 2009,
                'type'   => 'Novel',
                'genre'  => 'Inspirasi',
                'image'  => '/images/books/negeri-5-menara.jpg'
            ],
            [
                'title'  => 'Sapiens',
                'author' => 'Yuval Noah Harari',
                'year'   => 2011,
                'type'   => 'Novel',
                'genre'  => 'Sejarah',
                'image'  => '/images/books/sapiens.jpg'
            ],
            [
                'title'  => 'Atomic Habits',
                'author' => 'James Clear',
                'year'   => 2018,
                'type'   => 'Novel',
                'genre'  => 'Self-Help',
                'image'  => '/images/books/atomic-habits.jpg'
            ],
            [
                'title'  => 'The Alchemist',
                'author' => 'Paulo Coelho',
                'year'   => 1988,
                'type'   => 'Novel',
                'genre'  => 'Fiksi',
                'image'  => '/images/books/the-alchemist.jpg'
            ],
        ];

        return view('vbuku.index', compact('books'));
    }
}
