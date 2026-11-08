@extends('layouts.app')

@section('title', 'Menu Dashboard ELITISMOV')

@section('content')
<div class="screen-label">DASHBOARD</div>

<section class="panel dashboard-panel">
    <x-navbar :username="$username" />

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
        <h2>DAFTAR FILM</h2>

        <div class="collection-table-wrap">
            <table class="collection-table">
                <thead>
                    <tr>
                        <th>JUDUL FILM</th>
                        <th>TAHUN</th>
                        <th>GENRE</th>
                        <th>STATUS TONTONAN</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($movies as $movie)
                        <tr>
                            <td>{{ $movie['title'] }}</td>
                            <td>{{ $movie['year'] }}</td>
                            <td>{{ $movie['genre'] }}</td>
                            <td>{{ strtoupper($movie['status']) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection
