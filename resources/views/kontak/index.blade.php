<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Kontak - SMKN 1 CIJATI</title>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/kontak.css') }}">
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
      <a href="{{ url('/ekstrakurikuler') }}">Ekstrakurikuler</a>
      <a href="{{ url('/berita') }}">Berita</a>
      <a href="{{ url('/kontak') }}" class="active">Kontak</a>
      <a href="{{ url('/jurusan') }}">jurusan</a>
    </nav>
  </div>
</header>

<main>

  {{-- HERO KONTAK --}}
  <section class="kontak-header">
    <div class="container">
      <p class="section-tag">HUBUNGI KAMI</p>
      <h1>Kontak SMKN 1 CIJATI</h1>
      <p class="kontak-intro">
        Silakan hubungi kami untuk informasi lebih lanjut seputar
        pendaftaran, kegiatan, atau kerja sama sekolah.
      </p>
    </div>
  </section>

  {{-- INFO + FORM --}}
  <section class="section section-soft">
    <div class="container kontak-grid">

      <div class="kontak-info">
        <p class="section-tag">INFORMASI KONTAK</p>
        <h2>Detail Kontak Sekolah</h2>

        <div class="kontak-item">
          <span class="kontak-icon">📍</span>
          <div>
            <h4>Alamat</h4>
            <p>Jl. Cijati, Kecamatan Cijati, Kabupaten Cianjur, Jawa Barat 43284</p>
          </div>
        </div>

        <div class="kontak-item">
          <span class="kontak-icon">📞</span>
          <div>
            <h4>Telepon</h4>
            <p><a href="tel:085720817637">0857-2081-7637</a></p>
          </div>
        </div>

        <div class="kontak-item">
          <span class="kontak-icon">✉️</span>
          <div>
            <h4>Email</h4>
            <p><a href="mailto:smknegri1cijati@gmail.com">smknegri1cijati@gmail.com</a></p>
          </div>
        </div>

        <div class="kontak-item">
          <span class="kontak-icon">🕒</span>
          <div>
            <h4>Jam Operasional</h4>
            <p>Senin - Jumat, 07.00 - 15.00 WIB</p>
          </div>
        </div>

        <div class="kontak-map">
          <iframe
            src="https://www.google.com/maps?q=SMKN+1+Cijati&output=embed"
            width="100%" height="250" style="border:0;" allowfullscreen=""
            loading="lazy">
          </iframe>
        </div>
      </div>

      <div class="kontak-form-wrap">
        <p class="section-tag">KIRIM PESAN</p>
        <h2>Formulir Kontak</h2>

        @if (session('success'))
          <div class="alert-success">{{ session('success') }}</div>
        @endif

        @if ($errors->any())
          <div class="alert-error">
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif

        <form class="kontak-form" action="{{ route('kontak.store') }}" method="POST">
          @csrf
          <label for="nama">Nama Lengkap</label>
          <input type="text" id="nama" name="nama" value="{{ old('nama') }}" placeholder="Masukkan nama Anda" required>

          <label for="email">Email</label>
          <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Masukkan email Anda" required>

          <label for="subjek">Subjek</label>
          <input type="text" id="subjek" name="subjek" value="{{ old('subjek') }}" placeholder="Subjek pesan" required>

          <label for="pesan">Pesan</label>
          <textarea id="pesan" name="pesan" rows="5" placeholder="Tulis pesan Anda di sini" required>{{ old('pesan') }}</textarea>

          <button type="submit" class="btn-kirim">Kirim Pesan</button>
        </form>
      </div>

    </div>
  </section>
</main>

<footer id="kontak-footer" class="footer">
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