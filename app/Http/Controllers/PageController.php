<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function loginProcess(Request $request)
    {
        $data = $request->validate([
            'username' => 'required|string|max:30',
        ]);

        return redirect()->route('dashboard', [
            'username' => trim($data['username']),
        ]);
    }

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

        $featuredMovies = array_slice($movies, 0, 3);

        return [
            'username' => $username,
            'movies' => $movies,
            'featuredMovies' => $featuredMovies,
            'stats' => $stats,
            'totalMovies' => count($movies),
            'watched' => $watched,
            'watchlist' => $watchlist,
        ];
    }

    public function dashboard(Request $request)
    {
        return view('dashboard', $this->pageData($request));
    }


    public function pengelolaan(Request $request)
    {
        return view('pengelolaan', $this->pageData($request));
    }


    public function profile(Request $request)
    {
        return view('profile', $this->pageData($request));
    }
}
