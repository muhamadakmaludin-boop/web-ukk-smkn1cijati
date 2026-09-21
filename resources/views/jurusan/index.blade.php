<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jurusan - SMK NEGERI 1 CIJATI</title>
    <link rel="stylesheet" href="{{ asset('css/jurusan.css') }}">

    <style>
        /* ===== Penyesuaian ikon jurusan agar memakai logo asli ===== */
        .jurusan-icon{
            width:80px;
            height:80px;
            border-radius:50%;
            overflow:hidden;
            display:flex;
            align-items:center;
            justify-content:center;
            margin:0 auto 16px;
            background:#fff;
            box-shadow:0 4px 12px rgba(0,0,0,.12);
        }
        .jurusan-icon img{
            width:100%;
            height:100%;
            object-fit:cover;
        }
    </style>
</head>
<body>

    <!-- ===================== NAVBAR ===================== -->
    <nav class="navbar">
        <div class="navbar-container">
            <div class="navbar-logo">
                <img src="{{ asset('image/logo/logo.png') }}" alt="Logo SMKN 1 CIJATI">
                <div class="navbar-brand">
                    <h1>SMKN 1 CIJATI</h1>
                    <p>Sekolah Menengah Kejuruan</p>
                </div>
            </div>

            <ul class="navbar-menu">
                <li><a href="{{ url('/') }}">Beranda</a></li>
                <li><a href="{{ url('/profil') }}">Profil</a></li>
                <li><a href="{{ url('/guru') }}">Guru</a></li>
                <li><a href="{{ url('/jurusan') }}" class="active">Jurusan</a></li>
                <li><a href="{{ url('/ekstrakurikuler') }}">Ekstrakurikuler</a></li>
                <li><a href="{{ url('/berita') }}">Berita</a></li>
                <li><a href="{{ url('/kontak') }}">Kontak</a></li>
            </ul>
        </div>
    </nav>

    <!-- ===================== HERO SECTION ===================== -->
    <section class="jurusan-hero">
        <div class="hero-content">
            <h2>JURUSAN</h2>
            <p>
                SMKN 1 CIJATI memiliki berbagai program keahlian yang dirancang
                untuk membekali siswa dengan keterampilan sesuai kebutuhan dunia kerja.
            </p>
        </div>
    </section>

    <!-- ===================== DAFTAR JURUSAN ===================== -->
    <section class="jurusan-list">
        <div class="jurusan-container">

            @forelse($jurusans as $jurusan)
            <div class="jurusan-card">
                <div class="jurusan-icon">
                    <img src="{{ asset('image/jurusan/' . $jurusan->logo) }}" alt="Logo {{ $jurusan->nama }}">
                </div>
                <h3>{{ $jurusan->nama }}</h3>
                <p>{{ $jurusan->deskripsi }}</p>
                <a href="{{ url('/jurusan/' . $jurusan->slug) }}" class="btn-selengkapnya">Selengkapnya</a>
            </div>
            @empty
            <p style="text-align:center; grid-column:1/-1;">Belum ada data jurusan.</p>
            @endforelse

        </div>
    </section>

    <!-- ===================== FOOTER ===================== -->
    <footer class="footer">
        <div class="footer-container">
            <h3>SMKN 1 CIJATI</h3>
            <p>Jl. Cijati, Kec. Cijati cianjur</p>
            <p>Telepon: 085729812981</p>
            <p>Email: smkn1cijati@gmail.com</p>
            <p class="footer-copyright">&copy; {{ date('Y') }} SMKN 1 CIJATI. Semua hak cipta dilindungi.</p>
        </div>
    </footer>

</body>
</html>