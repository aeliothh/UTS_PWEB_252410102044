@extends('layouts.app')

@section('title', 'Menu Pengelolaan ElitisTrack')

@section('content')
<div class="screen-label">KELOLA FILM</div>

<section class="panel management-panel">
    <x-navbar :username="$username" />

    <div class="page-heading">
        <h1>KOLEKSI FILM</h1>
        <p>Daftar film yang tersimpan di ELITISMOV.</p>
    </div>

    <div class="management-list management-list--scroll">
        <div class="management-head">
            <span>JUDUL FILM</span>
            <span>TAHUN</span>
            <span>GENRE</span>
            <span>STATUS</span>
        </div>

        @foreach ($movies as $movie)
            <div class="management-row">
                <strong>{{ $movie['title'] }}</strong>
                <span>{{ $movie['year'] }}</span>
                <span>{{ $movie['genre'] }}</span>
                <span>{{ strtoupper($movie['status']) }}</span>
            </div>
        @endforeach
    </div>

    <p class="page-note">ELITISMOV.</p>
</section>
@endsection
