<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Berita - Admin SMKN 1 CIJATI</title>
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
            <a href="{{ url('/admin/galeri') }}">Galeri</a>
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
                <h1>Kelola Berita</h1>
                <p>Tambah, ubah, dan hapus berita &amp; kegiatan sekolah</p>
            </div>
            <div class="admin-user">
                <span class="admin-avatar">{{ strtoupper(substr(auth()->user()->name ?? 'A', 0, 1)) }}</span>
                <span>{{ auth()->user()->name ?? 'Admin' }}</span>
            </div>
        </header>

        <main class="admin-main">

            {{-- ALERT --}}
            @if (session('success'))
                <div class="admin-alert admin-alert-success">
                    {{ session('success') }}
                </div>
            @endif

            {{-- TOMBOL TAMBAH --}}
            <section class="admin-section">
                <div class="admin-section-head">
                    <h2>Daftar Berita</h2>
                    <a href="{{ url('/admin/berita/create') }}" class="admin-btn">+ Tambah Berita</a>
                </div>

                <div class="admin-table-wrap">
                    <table class="admin-table">
                        <thead>
                            <tr>
                                <th>Foto</th>
                                <th>Tanggal</th>
                                <th>Judul</th>
                                <th>Tag</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($berita as $item)
                                <tr>
                                    <td>
                                        <img src="{{ $item->gambar_url }}" alt="{{ $item->judul }}" class="admin-thumb">
                                    </td>
                                    <td>{{ $item->tanggal->format('d M Y') }}</td>
                                    <td>{{ $item->judul }}</td>
                                    <td>
                                        @if($item->tag)
                                            <span class="admin-badge">{{ $item->tag }}</span>
                                        @else
                                            —
                                        @endif
                                    </td>
                                    <td class="admin-table-actions">
                                        <a href="{{ url('/admin/berita/'.$item->id.'/edit') }}" class="admin-action-edit">Edit</a>
                                        <form action="{{ url('/admin/berita/'.$item->id) }}" method="POST" onsubmit="return confirm('Hapus berita ini?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="admin-action-delete">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="admin-table-empty">Belum ada data berita.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
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