@extends('layouts.admin')

@section('title', 'Dashboard Admin')

@section('content')
<div class="admin-page-header">
    <h2>Dashboard Admin</h2>
    <p>Ringkasan data SMKN 1 Cijati.</p>
</div>

@if (session('success'))
    <div class="alert-success">{{ session('success') }}</div>
@endif

<div class="stats-grid">
    <div class="stat-card">
        <span class="stat-number">{{ $jumlahGuru }}</span>
        <span class="stat-label">Guru</span>
    </div>
    <div class="stat-card">
        <span class="stat-number">{{ $jumlahSiswa }}</span>
        <span class="stat-label">Siswa</span>
    </div>
    <div class="stat-card">
        <span class="stat-number">{{ $jumlahEskul }}</span>
        <span class="stat-label">Ekstrakurikuler</span>
    </div>
    <div class="stat-card">
        <span class="stat-number">{{ $jumlahJurusan }}</span>
        <span class="stat-label">Program Keahlian</span>
    </div>
    <div class="stat-card">
        <span class="stat-number">{{ $jumlahGaleri }}</span>
        <span class="stat-label">Foto Galeri</span>
    </div>
    <div class="stat-card">
        <span class="stat-number">{{ $jumlahBerita }}</span>
        <span class="stat-label">Berita</span>
    </div>
</div>

<div class="admin-form-actions" style="margin: 20px 0;">
    <a href="{{ route('admin.home.edit') }}" class="btn-primary">Edit Statistik Beranda</a>
</div>

<div class="admin-page-header">
    <h3>Berita Terbaru</h3>
</div>

<div class="admin-table-wrap">
    <table>
        <thead>
            <tr>
                <th>Gambar</th>
                <th>Judul</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($beritaTerbaru as $berita)
                <tr>
                    <td>
                        <img src="{{ asset('image/berita/' . $berita->gambar) }}"
                             alt="{{ $berita->judul }}" class="admin-thumb">
                    </td>
                    <td>{{ $berita->judul }}</td>
                    <td>{{ \Carbon\Carbon::parse($berita->tanggal)->translatedFormat('d F Y') }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">Belum ada berita.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection