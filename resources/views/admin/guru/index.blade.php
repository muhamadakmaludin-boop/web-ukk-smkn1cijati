@extends('layouts.admin')

@section('title', 'Data Guru')

@section('content')

    <div class="admin-page-header">
        <h2>Kelola Data Guru</h2>
        <a href="{{ route('admin.guru.create') }}" class="btn btn-primary">+ Tambah Guru</a>
    </div>

    @if (session('success'))
        <div class="alert-success">{{ session('success') }}</div>
    @endif

    <div class="admin-table-wrap">
        <table class="admin-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Mapel</th>
                    <th>Urutan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($gurus as $index => $guru)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>
                            @if ($guru->foto)
                                <img src="{{ asset('image/guru-guru/' . $guru->foto) }}" class="admin-thumb-guru">
                            @else
                                <span class="text-muted">-</span>
                            @endif
                        </td>
                        <td><strong>{{ $guru->nama }}</strong></td>
                        <td>{{ $guru->jabatan }}</td>
                        <td>{{ $guru->mapel ?? '-' }}</td>
                        <td>{{ $guru->urutan }}</td>
                        <td class="admin-table-actions">
                            <a href="{{ route('admin.guru.edit', $guru->id) }}" class="btn btn-sm btn-edit">Edit</a>
                            <form action="{{ route('admin.guru.destroy', $guru->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-delete">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center">Belum ada data guru.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

@endsection