<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $jurusan->kode }} | SMKN 1 CIJATI</title>
    <link rel="stylesheet" href="{{ asset('css/jurusan.css') }}">
</head>
<body>

    <!-- NAVBAR -->
    <header class="navbar">
        <div class="navbar-container">
            <a href="{{ url('/') }}" class="navbar-logo">
                <img src="{{ asset('image/logo/logo.png') }}" alt="Logo SMKN 1 CIJATI">
                <div class="school-name">
                    <strong>SMKN 1 CIJATI</strong>
                    <span>Sekolah Menengah Kejuruan</span>
                </div>
            </a>
            <nav class="navbar-menu">
                <a href="{{ url('/') }}">Beranda</a>
                <a href="{{ url('/profil') }}">Profil</a>
                <a href="{{ url('/jurusan') }}" class="active">Jurusan</a>
                <a href="{{ url('/guru') }}">Guru</a>
                <a href="{{ url('/ekstrakurikuler') }}">Ekstrakurikuler</a>
                <a href="{{ url('/berita') }}">Berita</a>
                <a href="{{ url('/kontak') }}">Kontak</a>
            </nav>
        </div>
    </header>

    <!-- HERO -->
    <section class="jurusan-hero"
        style="
            @if($jurusan->gambar_hero)
                background-image: url('{{ asset('image/pasilitas/' . $jurusan->gambar_hero) }}');
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
            @else
                background: linear-gradient(135deg, #0f766e, #134e4a);
            @endif
            width: 100%;
            min-height: 480px;
        "
    >
        <div class="hero-container">
            <div class="hero-text">
                <span class="hero-badge">PROGRAM KEAHLIAN</span>
                <p class="hero-code">{{ $jurusan->kode }}</p>
                <h1>{{ $jurusan->nama }}</h1>
                <p class="hero-description">{{ $jurusan->deskripsi }}</p>
                <a href="{{ url('/jurusan') }}" class="btn-back">← Kembali ke Jurusan</a>
            </div>
            <div class="hero-image">
                <img src="{{ asset('image/jurusan/' . $jurusan->logo) }}" alt="Jurusan {{ $jurusan->nama }}">
            </div>
        </div>
    </section>

         @if($jurusan->foto_kaprog)
    <section class="content-section">
        <div class="guru-card">
            <img src="{{ asset('image/jurusan/' . $jurusan->slug . '/' . $jurusan->foto_kaprog) }}" alt="{{ $jurusan->nama_kaprog }}" class="guru-foto">
        <div class="guru-info">
            <h3 class="guru-jabatan">Kaprog {{ $jurusan->kode }}</h3>
            <p class="guru-nama">{{ $jurusan->nama_kaprog }}</p>
        </div>
        </div>
    </section>
        @endif

    <main>
        <!-- TENTANG -->
        <section class="content-section">
            <div class="section-title">
                <span>TENTANG JURUSAN</span>
                <h2>{{ $jurusan->nama }}</h2>
            </div>
            <div class="about-box">
                @foreach(explode("\n\n", $jurusan->deskripsi_lengkap) as $paragraf)
                    <p>{{ trim($paragraf) }}</p>
                @endforeach
            </div>
        </section>

        <!-- KOMPETENSI -->
        @if($jurusan->kompetensi)
        <section class="content-section section-light">
            <div class="section-title">
                <span>KOMPETENSI</span>
                <h2>Kompetensi yang Dipelajari</h2>
            </div>
            <div class="card-grid">
                @foreach($jurusan->kompetensi as $k)
                <div class="info-card">
                    <div class="card-icon">{{ $k['icon'] }}</div>
                    <h3>{{ $k['judul'] }}</h3>
                    <p>{{ $k['deskripsi'] }}</p>
                </div>
                @endforeach
            </div>
        </section>
        @endif

        <!-- FASILITAS -->
        @if($jurusan->fasilitasjurusan->count())
        <section class="content-section">
            <div class="section-title">
                <span>FASILITAS</span>
                <h2>Fasilitas Pembelajaran</h2>
            </div>
            <div class="feature-list">
            @foreach($jurusan->fasilitasjurusan as $f)
                <div class="feature-item feature-item-photo">
                    @if($f->foto)
                        <img src="{{ asset('image/pasilitas/' . $f->foto) }}" alt="{{ $f->nama }}">
                    @endif
                    <div class="feature-item-text">
                        <span>✓</span>
                        <p>{{ $f->nama }}</p>
                    </div>
                </div>
            @endforeach
            </div>
        </section>
        @endif

        <!-- KEUNGGULAN -->
        @if($jurusan->keunggulan)
        <section class="content-section section-light">
            <div class="section-title">
                <span>KEUNGGULAN</span>
                <h2>Keunggulan {{ $jurusan->kode }}</h2>
            </div>
            <div class="advantage-box">
                @foreach($jurusan->keunggulan as $i => $adv)
                <div class="advantage-item">
                    <strong>{{ sprintf('%02d', $i + 1) }}</strong>
                    <h3>{{ $adv['judul'] }}</h3>
                    <p>{{ $adv['deskripsi'] }}</p>
                </div>
                @endforeach
            </div>
        </section>
        @endif

        <!-- PROSPEK -->
        @if($jurusan->prospek)
        <section class="content-section">
            <div class="section-title">
                <span>MASA DEPAN</span>
                <h2>Prospek Lulusan</h2>
            </div>
            <div class="career-grid">
                @foreach($jurusan->prospek as $p)
                    <div class="career-card">{{ $p }}</div>
                @endforeach
            </div>
        </section>
        @endif
    </main>

    <!-- FOOTER -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-column">
                <h3>SMKN 1 CIJATI</h3>
                <p>Website resmi SMKN 1 CIJATI. Menyediakan informasi sekolah, program keahlian, kegiatan, dan layanan sekolah.</p>
            </div>
            <div class="footer-column">
                <h3>Alamat Sekolah</h3>
                <p>Kecamatan Cijati,<br>Kabupaten Cianjur,<br>Jawa Barat, Indonesia.</p>
            </div>
            <div class="footer-column">
                <h3>Kontak</h3>
                <p>Informasi kontak sekolah dapat dilihat melalui halaman Kontak.</p>
                <a href="{{ url('/kontak') }}">Hubungi Kami →</a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; {{ date('Y') }} SMKN 1 CIJATI. Semua Hak Dilindungi.</p>
        </div>
    </footer>

</body>
</html>