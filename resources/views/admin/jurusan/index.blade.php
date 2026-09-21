@extends('layouts.admin')

@section('title', 'Data Jurusan')

@section('content')

    <div class="admin-page-header">
        <h2>Kelola Data Jurusan</h2>
        <a href="{{ route('admin.jurusan.create') }}" class="btn-primary">+ Tambah Jurusan</a>
    </div>

    @if (session('success'))
        <div class="alert-success">{{ session('success') }}</div>
    @endif

    <div class="admin-table-wrap">
        <table class="admin-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Logo</th>
                    <th>Nama Jurusan</th>
                    <th>Slug</th>
                    <th>Deskripsi Singkat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($jurusans as $jurusan)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            <img src="{{ asset('image/jurusan/' . $jurusan->logo) }}"
                                 alt="Logo {{ $jurusan->nama }}"
                                 width="50">
                        </td>
                        <td>{{ $jurusan->nama }}</td>
                        <td>{{ $jurusan->slug }}</td>
                        <td>{{ Str::limit($jurusan->deskripsi, 60) }}</td>
                        <td class="admin-table-actions">
                            <a href="{{ route('admin.jurusan.edit', $jurusan->id) }}" class="btn-primary">Edit</a>
                            <form action="{{ route('admin.jurusan.destroy', $jurusan->id) }}" method="POST" style="display:inline" onsubmit="return confirm('Hapus jurusan ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-secondary">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6">Belum ada data jurusan.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

@endsection