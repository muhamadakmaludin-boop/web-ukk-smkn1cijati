<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Berita - SMKN 1 CIJATI</title>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/berita.css') }}">
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
      <a href="{{ url('/guru') }}">Guru</a>
      <a href="{{ url('/jurusan') }}">jurusan</a>
      <a href="{{ url('/ekstrakurikuler') }}">Ekstrakurikuler</a>
      <a href="{{ url('/berita') }}">Berita</a>
      <a href="{{ url('/') }}#kontak">Kontak</a>
    </nav>
  </div>
</header>

<main>
    <section class="berita-header" style="
        background-image: linear-gradient(135deg, rgba(123, 206, 239, 0.40), rgba(123, 206, 239, 0.40)), url('{{ asset('image/hero/foto-hormat.jpeg') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    ">

    <div class="container">
      <p class="section-tag">INFORMASI TERKINI</p>
      <h1>Berita & Kegiatan SMKN 1 CIJATI</h1>
      <p class="berita-intro">
        Kumpulan informasi terbaru seputar kegiatan, prestasi, dan
        pengumuman dari SMKN 1 CIJATI.
      </p>
    </div>
  </section>

  <section class="section section-soft">
    <div class="container">
      <p class="section-tag">DAFTAR BERITA</p>
      <h2>Berita & Kegiatan Terbaru</h2>

      <div class="berita-grid">
    @forelse ($daftarBerita as $berita)
        <article class="berita-card">
            <img src="{{ $berita->gambar_url }}" alt="{{ $berita->judul }}">
            <div class="berita-content">
                <small>{{ $berita->tanggal->translatedFormat('d F Y') }}</small>
                <h3>{{ $berita->judul }}</h3>
                <p>{{ $berita->ringkasan }}</p>
                <span class="berita-tag">{{ $berita->tag }}</span>
            </div>
        </article>
    @empty
        <p>Belum ada berita.</p>
    @endforelse
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