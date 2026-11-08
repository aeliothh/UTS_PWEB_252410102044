@extends('layouts.app')

@section('title', 'Menu Login ELITISMOV')

@section('content')
<div class="screen-label">LOGIN</div>

<section class="panel login-panel">
    <h1 class="login-title">SELAMAT DATANG DI ELITISMOV</h1>

    <div class="login-box">
        @include('partials.login-note')

        <form action="{{ route('login.submit') }}" method="POST" class="login-form">
            @csrf
            <label class="visually-hidden" for="username">Username</label>
            <input
                type="text"
                id="username"
                name="username"
                value="{{ old('username') }}"
                maxlength="30"
                autocomplete="username"
                aria-label="Masukkan username"
                required
            >

            @error('username')
                <p class="form-error">{{ $message }}</p>
            @enderror

            <button type="submit">MASUK</button>
        </form>
    </div>

    <p class="login-description">
        ELITISMOV merupakan sistem tracker film berdasarkan status tontonan,
        tahun dan genre.
    </p>
</section>
@endsection
