<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Berita - Admin SMKN 1 CIJATI</title>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>

<div class="admin-wrapper">

    {{-- SIDEBAR --}}
    <aside class="admin-sidebar">
        <div class="admin-brand">
            <img src="{{ asset('image/logo/logo.png') }}" alt="logo SMKN 1 CIJATI">
            <span>Admin SMKN 1 CIJATI</span>
        </div>

        <nav class="admin-menu">
            <a href="{{ url('/admin/home') }}">Dashboard</a>
            <a href="{{ url('/admin/profil') }}">Profil Sekolah</a>
            <a href="{{ url('/admin/guru') }}">Data Guru</a>
            <a href="{{ url('/admin/jurusan') }}">Jurusan</a>
            <a href="{{ url('/admin/ekstrakurikuler') }}">Ekstrakurikuler</a>
            <a href="{{ url('/admin/berita') }}" class="active">Berita</a>
            <a href="{{ url('/') }}" target="_blank">Lihat Website</a>
        </nav>

        <form action="{{ url('/logout') }}" method="POST" class="admin-logout">
            @csrf
            <button type="submit">Keluar</button>
        </form>
    </aside>

    {{-- KONTEN --}}
    <div class="admin-content">

        <header class="admin-topbar">
            <button type="button" class="admin-burger" id="adminBurger" aria-label="Buka menu">
                <span></span><span></span><span></span>
            </button>
            <div>
                <h1>Edit Berita</h1>
                <p>Perbarui data berita: {{ $berita->judul }}</p>
            </div>
            <div class="admin-user">
                <span class="admin-avatar">{{ strtoupper(substr(auth()->user()->name ?? 'A', 0, 1)) }}</span>
                <span>{{ auth()->user()->name ?? 'Admin' }}</span>
            </div>
        </header>

        <main class="admin-main">

            @if ($errors->any())
                <div class="admin-alert admin-alert-error">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <section class="admin-section">
                <div class="admin-section-head">
                    <h2>Form Berita</h2>
                    <a href="{{ url('/admin/berita') }}" class="admin-btn admin-btn-outline">Kembali</a>
                </div>

                <div class="admin-form-wrap">
                    <form action="{{ url('/admin/berita/'.$berita->id) }}" method="POST" enctype="multipart/form-data" class="admin-form">
                        @csrf
                        @method('PUT')

                        <div class="admin-field">
                            <label for="judul">Judul Berita</label>
                            <input type="text" name="judul" id="judul" value="{{ old('judul', $berita->judul) }}">
                        </div>

                        <div class="admin-field-row">
                            <div class="admin-field">
                                <label for="tanggal">Tanggal</label>
                                <input type="date" name="tanggal" id="tanggal" value="{{ old('tanggal', $berita->tanggal?->format('Y-m-d')) }}">
                            </div>

                            <div class="admin-field">
                                <label for="tag">Tag</label>
                                <select name="tag" id="tag">
                                    <option value="">— Pilih Tag —</option>
                                    @foreach (['Kegiatan', 'Siswa', 'Prestasi', 'Pengumuman'] as $opsi)
                                        <option value="{{ $opsi }}" {{ old('tag', $berita->tag) == $opsi ? 'selected' : '' }}>{{ $opsi }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="admin-field">
                            <label for="ringkasan">Ringkasan / Isi Berita</label>
                            <textarea name="ringkasan" id="ringkasan" rows="5">{{ old('ringkasan', $berita->ringkasan) }}</textarea>
                        </div>

                        <div class="admin-field">
                            <label for="gambar">Gambar Berita</label>
                            @if ($berita->gambar)
                                <div class="admin-form-preview">
                                    <img src="{{ $berita->gambar_url }}" alt="{{ $berita->judul }}">
                                </div>
                            @endif
                            <input type="file" name="gambar" id="gambar" accept="image/*">
                            <small>Kosongkan jika tidak ingin mengganti gambar.</small>
                        </div>

                        <div class="admin-form-actions">
                            <button type="submit" class="admin-btn">Update Berita</button>
                            <a href="{{ url('/admin/berita') }}" class="admin-btn admin-btn-outline">Batal</a>
                        </div>
                    </form>
                </div>
            </section>

        </main>
    </div>
</div>

<script>
    const burger = document.getElementById('adminBurger');
    const wrapper = document.querySelector('.admin-wrapper');
    if (burger) {
        burger.addEventListener('click', () => {
            wrapper.classList.toggle('sidebar-open');
        });
    }
</script>

</body>
</html>