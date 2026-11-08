@props(['username' => 'Pengguna', 'active' => ''])

<nav class="main-nav" aria-label="Navigasi utama">
    <div class="main-nav__links">
        <a
            href="{{ route('dashboard', ['username' => $username]) }}"
            class="{{ $active === 'dashboard' ? 'is-active' : '' }}"
        >Dashboard</a>

        <a
            href="{{ route('pengelolaan', ['username' => $username]) }}"
            class="{{ $active === 'pengelolaan' ? 'is-active' : '' }}"
        >Pengelolaan Film</a>

        <a
            href="{{ route('profile', ['username' => $username]) }}"
            class="{{ $active === 'profile' ? 'is-active' : '' }}"
        >Profil</a>
    </div>

    <div class="user-name">
        <span>MASUK SEBAGAI</span>
        <strong>{{ $username }}</strong>
    </div>
</nav>
