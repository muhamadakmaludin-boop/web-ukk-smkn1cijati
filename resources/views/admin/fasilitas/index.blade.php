@extends('layouts.admin')

@section('title', 'Kelola Fasilitas Sekolah')

@section('content')

<div class="admin-page-header">
    <h2>Kelola Fasilitas Sekolah</h2>
    <p>Tambah, ubah, dan hapus data fasilitas sekolah</p>
</div>

@if (session('success'))
    <div class="alert-success">{{ session('success') }}</div>
@endif

<div class="admin-form-actions" style="margin-bottom: 16px;">
    <a href="{{ route('admin.fasilitas-sekolah.create') }}" class="btn-primary">+ Tambah Fasilitas</a>
</div>

<div class="admin-table-wrap">
    <table>
        <thead>
            <tr>
                <th>Foto</th>
                <th>Nama</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($daftarFasilitas as $item)
                <tr>
                    <td>
                        @if($item->poto)
                            <img src="{{ asset('image/pasilitas/' . $item->poto) }}" alt="{{ $item->nama }}" style="width:70px; border-radius:6px;">
                        @else
                            —
                        @endif
                    </td>
                    <td>{{ $item->nama }}</td>
                    <td>
                        <a href="{{ route('admin.fasilitas-sekolah.edit', $item->id) }}" class="btn-secondary">Edit</a>
                        <form action="{{ route('admin.fasilitas-sekolah.destroy', $item->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Hapus fasilitas ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-secondary">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">Belum ada data fasilitas.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

@endsection