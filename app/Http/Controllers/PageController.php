<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Menampilkan form login.
    public function login()
    {
        return view('login');
    }

    // Memeriksa username lalu meneruskannya ke dashboard melalui URL.
    public function loginProcess(Request $request)
    {
        $data = $request->validate([
            'username' => 'required|string|max:30',
        ]);

        return redirect()->route('dashboard', [
            'username' => trim($data['username']),
        ]);
    }

    // Menyimpan contoh data film yang digunakan pada beberapa halaman.
    private function movies()
    {
        return [
            [
                'title' => 'Avengers: Infinity War',
                'year' => 2018,
                'genre' => 'Superhero, Action',
                'rating' => 9.0,
                'status' => 'Ditonton',
            ],
            [
                'title' => 'Avengers: Endgame',
                'year' => 2019,
                'genre' => 'Superhero, Action',
                'rating' => 8.8,
                'status' => 'Ditonton',
            ],
            [
                'title' => 'Avengers: Age of Ultron',
                'year' => 2015,
                'genre' => 'Superhero, Sci-Fi',
                'rating' => 8.0,
                'status' => 'Ditonton',
            ],
            [
                'title' => 'Avengers: Doomsday',
                'year' => 2026,
                'genre' => 'Superhero, Action',
                'rating' => null,
                'status' => 'Watchlist',
            ],
        ];
    }

    // Menyiapkan data yang dipakai halaman setelah login.
    private function pageData(Request $request)
    {
        $movies = $this->movies();
        $username = $request->query('username', 'Pengguna');

        $watched = count(array_filter($movies, function ($movie) {
            return $movie['status'] === 'Ditonton';
        }));

        $watchlist = count(array_filter($movies, function ($movie) {
            return $movie['status'] === 'Watchlist';
        }));

        $stats = [
            ['label' => 'JUMLAH FILM', 'value' => count($movies)],
            ['label' => 'DITONTON', 'value' => $watched],
            ['label' => 'WATCHLIST', 'value' => $watchlist],
        ];

        return [
            'username' => $username,
            'movies' => $movies,
            'stats' => $stats,
            'totalMovies' => count($movies),
            'watched' => $watched,
            'watchlist' => $watchlist,
        ];
    }

    // Menampilkan dashboard.
    public function dashboard(Request $request)
    {
        return view('dashboard', $this->pageData($request));
    }

    // Menampilkan daftar film.
    public function pengelolaan(Request $request)
    {
        return view('pengelolaan', $this->pageData($request));
    }

    // Menampilkan profil pengguna.
    public function profile(Request $request)
    {
        return view('profile', $this->pageData($request));
    }
}
