<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMK NEGERI 1 CIJATI</title>
     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<header class="navbar">
    <div class="container nav-wrap">
        <a href="#beranda" class="brand">
            <img src="{{ asset('image/logo/logo.png') }}" alt="logo SMKN 1 CIJATI">
            <span>SMK NEGERI 1 CIJATI</span>
        </a>

        <button type="button" class="navbar-toggle" aria-label="Buka menu">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <nav class="navbar-menu">
            <a href="#beranda">Beranda</a>
            <a href="{{ url('/profil') }}">Profil Sekolah</a>
            <a href="{{ url('/guru') }}">Guru</a>
            <a href="{{ url('/jurusan') }}">jurusan</a>
            <a href="{{ url('/ekstrakurikuler') }}">Ekstrakurikuler</a>
            <a href="{{ url('/berita') }}">Berita</a>
            <a href="{{ url('/kontak') }}">Kontak</a>
        </nav>
    </div>
</header>

<main>
    <section id="beranda" class="hero">
        <div class="hero-overlay"></div>
        <div class="container hero-content">
            <p class="eyebrow">WEBSITE RESMI SEKOLAH</p>
            <h1>{{ $home->hero_judul }}</h1>
            <p class="hero-text">
                {{ $home->hero_text }}
            </p>
            <div class="hero-actions">
                <a href="{{ url('/profil') }}" class="btn btn-outline">Profil Sekolah</a>
                <a href="#berita" class="btn btn-outline">Lihat Kegiatan</a>
            </div>
        </div>
    </section>

    <section id="profil" class="section">
        <div class="container two-column">
            <div>
                <p class="section-tag">TENTANG SEKOLAH</p>
                <h2>Selamat Datang di SMK NEGERI 1 CIJATI</h2>
                <p>
                    SMKN 1 CIJATI merupakan sekolah yang berkomitmen
                    memberikan pendidikan dan pembelajaran yang mendukung
                    perkembangan pengetahuan, keterampilan, dan karakter siswa.
                </p>
                <p>
                    Informasi profil lengkap dan tabel profil sekolah akan
                    dikembangkan pada tahap berikutnya.
                </p>
            </div>
            <div class="info-box">
                <h3>Fokus Pendidikan</h3>
                <p>Pengetahuan • Keterampilan • Karakter • Prestasi</p>
            </div>
        </div>
        <div class="card-grid">
      <article class="sambutan-card">
    <img src="{{ $sambutan->foto ? asset('image/beranda/' . $sambutan->foto) : asset('image/beranda/a_rahmat_dimyati.jpeg') }}"
         alt="Sambutan" class="sambutan-foto">
    <div class="sambutan-body">
        <small>2026</small>
        <h3>Sambutan {{ $sambutan->nama }}</h3>
        <p>{!! nl2br(e($sambutan->isi)) !!}</p>
        <a href="#berita" class="read-more">Baca Selengkapnya →</a>
    </div>
</article>
    </section>

    <section id="ekstrakurikuler" class="section section-soft">
        <div class="container">
            <div class="section-heading">
                <p class="section-tag">DATA SEKOLAH</p>
                <h2>Informasi Sekolah</h2>
                <p>ini adala data siswa,guru,eskul dan jurusan dan julah kls yg ada di sekolah SMKN 1 CIJATI.</p>
            </div>
            <div class="stats-grid">
                <div class="stat-card">
                    <span class="stat-number">{{ $home->jumlah_guru }}</span>
                    <span class="stat-label">Guru</span>
                </div>
                <div class="stat-card">
                    <span class="stat-number">{{ $home->jumlah_siswa }}</span>
                    <span class="stat-label">Siswa</span>
                </div>
                <div class="stat-card">
                    <span class="stat-number">{{ $home->jumlah_ekskul }}</span>
                    <span class="stat-label">Ekstrakurikuler</span>
                </div>
                <div class="stat-card">
                    <span class="stat-number">{{ $home->jumlah_jurusan }}</span>
                    <span class="stat-label">Program Keahlian</span>
                </div>
                <div class="stat-card">
                    <span class="stat-number">{{ $home->jumlah_kelas }}</span>
                    <span class="stat-label">jumlah kelas</span>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
    <div class="container">
        <p class="section-tag">FASILITAS</p>
        <h2>Fasilitas Sekolah</h2>
        <div class="fasilitas-grid">
            @foreach($daftarFasilitas as $item)
                <div class="fasilitas-card">
                    @if($item->poto)
                        <img src="{{ asset('image/pasilitas/' . $item->poto) }}" alt="{{ $item->nama }}">
                    @endif
                    <h3>{{ $item->nama }}</h3>
                </div>
            @endforeach
        </div>
    </div>
</section>

    <section id="galeri" class="section section-soft">
        <div class="container">
            <div class="section-heading">
                <p class="section-tag">DOKUMENTASI</p>
                <h2>Galeri Sekolah</h2>
                <p>Dokumentasi kegiatan sekolah.</p>
            </div>
            <div class="gallery-grid">
            @foreach($daftarGaleri as $g)
            <div class="galeri-item">
                <img src="{{ asset('image/galeri/' . $g->gambar) }}" alt="{{ $g->judul }}">
            </div>
            @endforeach
</div>
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
            <p>Alamat: jl. cijati kec.cijati</p>
            <p>Telepon: 085720817637</p>
            <p>Email: smkn1cijati@gmail.com</p>
        </div>
    </div>
    <div class="copyright">
        © 2026 SMKN 1 CIJATI. Semua hak dilindungi.
    </div>
</footer>

<script src="{{ asset('js/navbar.js') }}"></script>
</body>
</html>