@extends('layouts.admin')

@section('title', 'Kelola Galeri')

@section('content')

<div class="admin-page-header">
    <h2>Kelola Galeri</h2>
    <p>Tambah, ubah, dan hapus foto galeri sekolah</p>
</div>

@if (session('success'))
    <div class="alert-success">{{ session('success') }}</div>
@endif

<div class="admin-form-actions" style="margin-bottom: 16px;">
    <a href="{{ route('admin.galeri.create') }}" class="btn-primary">+ Tambah Galeri</a>
</div>

<div class="admin-table-wrap">
    <table>
        <thead>
            <tr>
                <th>Gambar</th>
                <th>Judul</th>
                <th>Kategori</th>
                <th>Tampil</th>
                <th>Urutan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($galeris as $item)
                <tr>
                    <td>
                        <img src="{{ asset('image/galeri/' . $item->gambar) }}" alt="{{ $item->judul }}" style="width:70px; border-radius:6px;">
                    </td>
                    <td>{{ $item->judul }}</td>
                    <td>{{ $item->kategori ?? '—' }}</td>
                    <td>{{ $item->tampil ? 'Ya' : 'Tidak' }}</td>
                    <td>{{ $item->urutan }}</td>
                    <td>
                        <a href="{{ route('admin.galeri.edit', $item->id) }}" class="btn-secondary">Edit</a>
                        <form action="{{ route('admin.galeri.destroy', $item->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Hapus galeri ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-secondary">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">Belum ada data galeri.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

@endsection