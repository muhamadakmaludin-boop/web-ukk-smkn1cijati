<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Sekolah - {{ $profil->nama_sekolah }}</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/profil.css') }}">
</head>
<body>

<header class="navbar">
    <div class="container nav-wrap">
        <a href="{{ url('/') }}" class="brand">
            <img src="{{ asset('image/logo/logo.png') }}" alt="Logo SMKN 1 CIJATI">
            <span>{{ $profil->nama_sekolah }}</span>
        </a>
        <input type="checkbox" id="nav-toggle" class="nav-toggle">
        <label for="nav-toggle" class="nav-button"></label>
        <nav class="navbar-menu">
            <a href="{{ url('/') }}">Beranda</a>
            <a href="{{ url('/profil') }}" class="active">Profil Sekolah</a>
            <a href="{{ url('/guru') }}">Guru</a>
            <a href="{{ url('/jurusan') }}">jurusan</a>
            <a href="{{ url('/ekstrakurikuler') }}">Ekstrakurikuler</a>
            <a href="{{ url('/') }}#berita">Berita</a>
            <a href="{{ url('/kontak') }}">Kontak</a>
        </nav>
    </div>
</header>

<main>

    {{-- HERO PROFIL --}}
    <section class="profile-header" style="
        background-image: linear-gradient(135deg, rgba(123, 206, 239, 0.50), rgba(123, 206, 239, 0.50)), url('{{ asset('image/panter.jpeg') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    ">
        <div class="container">
            <p class="section-tag">PROFIL SEKOLAH</p>
            <h1>Profil {{ $profil->nama_sekolah }}</h1>
            <p class="profile-intro">
                Halaman ini berisi informasi umum, data resmi, serta visi dan misi
                {{ $profil->nama_sekolah }} sebagai sekolah menengah kejuruan negeri di Kabupaten {{ $profil->kabupaten }}.
            </p>
        </div>
    </section>

    {{-- DESKRIPSI --}}
    <section class="section">
        <div class="container">
            <p class="section-tag">TENTANG SEKOLAH</p>
            <h2>Deskripsi Sekolah</h2>
            <p class="profile-desc">
                {{ $profil->deskripsi }}
            </p>
        </div>
    </section>

    {{-- DATA RESMI --}}
    <section class="section section-soft">
        <div class="container">
            <p class="section-tag">DATA RESMI</p>
            <h2>Tabel Informasi Profil Sekolah</h2>

            <div class="table-wrap">
                <table class="profile-table">
                    <tbody>
                        <tr>
                            <th>Nama Sekolah</th>
                            <td>{{ $profil->nama_sekolah }}</td>
                        </tr>
                        <tr>
                            <th>NPSN</th>
                            <td>{{ $profil->npsn }}</td>
                        </tr>
                        <tr>
                            <th>Akreditasi</th>
                            <td><span class="badge badge-a">{{ $profil->akreditasi }}</span></td>
                        </tr>
                        <tr>
                            <th>Status Sekolah</th>
                            <td>{{ $profil->status_sekolah }}</td>
                        </tr>
                        <tr>
                            <th>Jenjang Pendidikan</th>
                            <td>{{ $profil->jenjang_pendidikan }}</td>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <td>{{ $profil->alamat }}</td>
                        </tr>
                        <tr>
                            <th>Desa/Kelurahan</th>
                            <td>{{ $profil->desa_kelurahan }}</td>
                        </tr>
                        <tr>
                            <th>Kecamatan</th>
                            <td>{{ $profil->kecamatan }}</td>
                        </tr>
                        <tr>
                            <th>Kabupaten</th>
                            <td>{{ $profil->kabupaten }}</td>
                        </tr>
                        <tr>
                            <th>Provinsi</th>
                            <td>{{ $profil->provinsi }}</td>
                        </tr>
                        <tr>
                            <th>Kode Pos</th>
                            <td>{{ $profil->kode_pos }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td><a href="mailto:{{ $profil->email }}">{{ $profil->email }}</a></td>
                        </tr>
                        <tr>
                            <th>Nomor Telepon</th>
                            <td><a href="tel:{{ $profil->telepon }}">{{ $profil->telepon }}</a></td>
                        </tr>
                        <tr>
                            <th>Website</th>
                            <td>{{ $profil->website }}</td>
                        </tr>
                        <tr>
                            <th>Tahun Berdiri</th>
                            <td>{{ $profil->tahun_berdiri }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p class="table-note">
                {{ $profil->nama_sekolah }} adalah sekolah menengah kejuruan negeri yang
                berada di Kecamatan {{ $profil->kecamatan }}, Kabupaten {{ $profil->kabupaten }}, Provinsi {{ $profil->provinsi }}.
            </p>
        </div>
    </section>

    {{-- VISI MISI --}}
    <section class="section">
        <div class="container">
            <p class="section-tag">ARAH SEKOLAH</p>
            <h2>Visi &amp; Misi</h2>

            <div class="vm-grid">
                <div class="vm-card">
                    <div class="vm-icon">🎯</div>
                    <h3>Visi</h3>
                    <p>"{{ $profil->visi }}"</p>
                </div>

                <div class="vm-card">
                    <div class="vm-icon">📌</div>
                    <h3>Misi</h3>
                    <ul>
                        @foreach (explode("\n", $profil->misi) as $poin)
                            @if (trim($poin) !== '')
                                <li>{{ trim($poin) }}</li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>

</main>

<footer id="kontak" class="footer">
    <div class="container footer-grid">
        <div>
            <h3>{{ $profil->nama_sekolah }}</h3>
            <p>Website informasi dan kegiatan sekolah.</p>
        </div>
        <div>
            <h4>Kontak</h4>
            <p>Alamat: {{ $profil->alamat }}</p>
            <p>Telepon: {{ $profil->telepon }}</p>
            <p>Email: {{ $profil->email }}</p>
        </div>
    </div>
    <div class="copyright">
        © 2026 {{ $profil->nama_sekolah }}. Semua hak dilindungi.
    </div>
</footer>

</body>
</html>