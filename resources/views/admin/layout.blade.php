<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin') - SMKN 1 CIJATI</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>

    <div class="admin-wrapper">

        <aside class="admin-sidebar">
            <div class="admin-brand">
                <img src="{{ asset('image/logo/logo.png') }}" alt="Logo SMKN 1 CIJATI">
                <span>SMKN 1 CIJATI</span>
            </div>

            <nav class="admin-menu">
                <a href="{{ route('admin.home') }}" class="{{ request()->routeIs('admin.home') ? 'active' : '' }}">Dashboard</a>
                <a href="{{ route('admin.berita.index') }}" class="{{ request()->routeIs('admin.berita.*') ? 'active' : '' }}">Berita</a>
                <a href="{{ route('admin.guru.index') }}" class="{{ request()->routeIs('admin.guru.*') ? 'active' : '' }}">Guru</a>
                <a href="{{ route('admin.jurusan.index') }}" class="{{ request()->routeIs('admin.jurusan.*') ? 'active' : '' }}">Jurusan</a>
                <a href="{{ route('admin.eskul.index') }}" class="{{ request()->routeIs('admin.eskul.*') ? 'active' : '' }}">Ekstrakurikuler</a>
                <a href="{{ route('admin.profil.edit') }}" class="{{ request()->routeIs('admin.profil.*') ? 'active' : '' }}">Profil Sekolah</a>
            </nav>
        </aside>

        <div class="admin-main">
            <header class="admin-topbar">
                <h1>@yield('title', 'Dashboard')</h1>
            </header>

            <main class="admin-content">
                @yield('content')
            </main>
        </div>

    </div>

</body>
</html>