@extends('layouts.app')

@section('title', 'Selamat Datang')

@section('content')

<div class="page-head">
    <p class="eyebrow">CATATAN FILM PRIBADI</p>

    <h1>Selamat datang di MOV.</h1>

    <p class="muted">
        Tempat sederhana untuk menyimpan film yang sudah kamu
        tonton dan film yang ingin kamu tonton berikutnya.
    </p>

    <a href="{{ route('login') }}" class="text-link">
        Mulai menggunakan MOV →
    </a>
</div>

<section class="section">

    <div class="section__title">
        <h2>Tentang MOV.</h2>
        <span>Personal Movie Collection</span>
    </div>

    <div class="row">
        <span class="row__year">01</span>

        <div>
            <div class="row__title">Simpan koleksi film</div>
            <div class="row__sub">
                Catat film yang pernah kamu tonton.
            </div>
        </div>

        <span class="row__rating">Koleksi</span>
    </div>

    <div class="row">
        <span class="row__year">02</span>

        <div>
            <div class="row__title">Buat daftar tontonan</div>
            <div class="row__sub">
                Simpan film yang ingin ditonton nanti.
            </div>
        </div>

        <span class="row__rating">Watchlist</span>
    </div>

    <div class="row">
        <span class="row__year">03</span>

        <div>
            <div class="row__title">Kelola catatan film</div>
            <div class="row__sub">
                Lihat kembali daftar film dalam satu halaman.
            </div>
        </div>

        <span class="row__rating">Arsip</span>
    </div>

</section>

@endsection
