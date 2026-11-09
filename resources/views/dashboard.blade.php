@extends('layouts.app')

@section('title', 'Menu Dashboard ELITISMOV')

@section('content')
<div class="screen-label">DASHBOARD</div>

<section class="panel dashboard-panel">
    <x-navbar :username="$username" active="dashboard" />

    <div class="welcome-text">
        SELAMAT DATANG, {{ strtoupper($username) }} !
    </div>

    <div class="stats">
        @foreach ($stats as $stat)
            <div class="stat">
                <span>{{ $stat['label'] }}</span>
                <strong>{{ $stat['value'] }}</strong>
            </div>
        @endforeach
    </div>

    <div class="collection-box">
        <h2>RINGKASAN FILM</h2>

        <ul class="dashboard-film-list">
            @foreach ($featuredMovies as $movie)
                <li>
                    <span class="dashboard-film-title">
                        {{ $movie['title'] }}
                    </span>

                    <span class="dashboard-film-status">
                        {{ strtoupper($movie['status']) }}
                    </span>
                </li>
            @endforeach
        </ul>

        <div class="page-links">
            <a href="{{ route('pengelolaan', ['username' => $username]) }}">
                Lihat koleksi lengkap &rarr;
            </a>
        </div>
    </div>
</section>
@endsection
