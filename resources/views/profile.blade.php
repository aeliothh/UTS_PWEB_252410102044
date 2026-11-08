@extends('layouts.app')

@section('title', 'Menu Profil ELITISMOV')

@section('content')
<div class="screen-label">KELOLA PROFIL</div>

<section class="panel profile-panel">
    <x-navbar :username="$username" active="profile" />

    <div class="page-heading">
        <h1>PROFIL PENGGUNA</h1>
        <p>Informasi akun yang sedang digunakan.</p>
    </div>

    <div class="profile-details">
        <div class="profile-row">
            <span>USERNAME</span>
            <strong>{{ $username }}</strong>
        </div>
        <div class="profile-row">
            <span>JENIS AKUN</span>
            <strong>akun test ajah</strong>
        </div>
        <div class="profile-row">
            <span>JUMLAH FILM</span>
            <strong>{{ $totalMovies }} judul</strong>
        </div>
        <div class="profile-row">
            <span>SUDAH DITONTON</span>
            <strong>{{ $watched }} film</strong>
        </div>
    </div>

    <p class="page-note">ELITISMOV.</p>
</section>
@endsection
