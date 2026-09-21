<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ekstrakurikuler - SMKN 1 CIJATI</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/eskul.css') }}">
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
            <a href="{{ url('/') }}#berita">Berita</a>
            <a href="{{ url('/') }}#kontak">Kontak</a>
        </nav>
    </div>
</header>

<main>

    <section class="ekskul-header">
        <div class="container">
            <p class="section-tag">EKSTRAKURIKULER</p>
            <h1>Ekstrakurikuler SMKN 1 CIJATI</h1>
            <p class="ekskul-intro">
                Beragam kegiatan ekstrakurikuler sebagai wadah bagi siswa untuk
                mengembangkan bakat, minat, keterampilan, kreativitas,
                kepemimpinan, dan karakter.
            </p>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <p class="section-tag">MENGAPA PENTING</p>
            <h2>Pengembangan Bakat dan Minat Siswa</h2>
            <p>
                Kegiatan ekstrakurikuler membantu siswa mengasah kemampuan di luar
                pelajaran akademik, membangun kerja sama tim, serta menumbuhkan
                rasa tanggung jawab dan kepemimpinan sejak dini.
            </p>
        </div>
    </section>

    <section class="section section-soft">
        <div class="container">
            <p class="section-tag">PILIHAN KEGIATAN</p>
            <h2>Daftar Ekstrakurikuler</h2>

            <div class="ekskul-grid">
                @foreach($daftarEskul as $item)
                    <div class="ekskul-card">
                        <div class="ekskul-photo-wrap">
                            @if($item->foto)
                                <img class="ekskul-image" src="{{ asset($item->foto) }}" alt="Foto {{ $item->nama }}">
                            @endif
                        </div>

                        @if($item->logo)
                            <img class="ekskul-logo" src="{{ asset($item->logo) }}" alt="Logo {{ $item->nama }}">
                        @endif
                        <div class="ekskul-content">
                            <h3>{{ $item->nama }}</h3>
                            <p>{{ $item->deskripsi }}</p>
                            <div class="ekskul-info">
                                <span>Pembina: {{ $item->pembina }}</span>
                                <span>Jadwal: {{ $item->jadwal }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
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