<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Guru - SMKN 1 CIJATI</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/guru.css') }}">
</head>
<body>

<header class="navbar">
    <div class="container nav-wrap">
        <a href="{{ url('/') }}" class="brand">
            <img src="{{ asset('image/logo/logo.png') }}" alt="Logo SMKN 1 CIJATI">
            <span>SMKN 1 CIJATI</span>
        </a>
        <input type="checkbox" id="nav-toggle" class="nav-toggle">
        <label for="nav-toggle" class="nav-button"></label>
        <nav class="navbar-menu">
            <a href="{{ url('/') }}">Beranda</a>
            <a href="{{ url('/profil') }}">Profil Sekolah</a>
            <a href="{{ url('/guru') }}">Data Guru</a>
            <a href="{{ url('/jurusan') }}">jurusan</a>
            <a href="{{ url('/ekstrakurikuler') }}">Ekstrakurikuler</a>
            <a href="{{ url('/berita') }}">Berita</a>
            <a href="{{ url('/kontak') }}">Kontak</a>

        </nav>
    </div>
</header>

<main>

    <section class="guru-header">
        <div class="container">
            <p class="section-tag">TENAGA PENDIDIK</p>
            <h1>Data Guru SMKN 1 CIJATI</h1>
            <p class="guru-intro">
                Profil tenaga pendidik dan tenaga kependidikan yang mengajar
                dan mendukung proses belajar mengajar di SMKN 1 CIJATI.
            </p>
        </div>
    </section>

    <section class="section section-soft">
        <div class="container">
            <p class="section-tag">DAFTAR GURU</p>
            <h2>Guru & Tenaga Pendidik</h2>

            <div class="guru-grid">
                @forelse ($daftarGuru as $guru)
                    <div class="guru-card">
                        <img class="guru-photo"
                             src="{{ asset('image/guru-guru/' . $guru['foto']) }}"
                             alt="Foto {{ $guru['nama'] }}">
                        <div class="guru-content">
                            <h3>{{ $guru['nama'] }}</h3>
                            <span class="guru-jabatan">{{ $guru['jabatan'] }}</span>
                            <div class="guru-info">
                                <span>Mapel: {{ $guru['mapel'] }}</span>
                            </div>
                        </div>
                    </div>
                @empty
                    <p>Belum ada data guru.</p>
                @endforelse
            </div>
        </div>
    </section>

</main>

<footer id="kontak" class="footer">
    <div class="container footer-grid">
        <div>
            <h3>SMKN 1 CIJATI</h3>
            <p>Website informasi dan kegiatan sekolah.</p>
        </div>
        <div>
            <h4>Kontak</h4>
            <p>Alamat: jl. cijati kec cijati cianjur</p>
            <p>Telepon: 085720817637</p>
            <p>Email: smkn1cijati@gmail.com</p>
        </div>
    </div>
    <div class="copyright">
        © 2026 SMKN 1 CIJATI. Semua hak dilindungi.
    </div>
</footer>

</body>
</html>