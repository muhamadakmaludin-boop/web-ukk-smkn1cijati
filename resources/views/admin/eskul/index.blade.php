@extends('layouts.admin')

@section('title', 'Ekstrakurikuler')

@section('content')

<style>
    .admin-thumb-foto {
        width: 70px;
        height: 50px;
        object-fit: cover;
        border-radius: 6px;
        display: block;
    }

    .admin-thumb-logo {
        width: 32px;
        height: 32px;
        object-fit: cover;
        border-radius: 50%;
        display: block;
    }
</style>

<div class="admin-page-header">
    <h1>Ekstrakurikuler</h1>
    <a href="{{ route('admin.eskul.create') }}" class="btn-primary">+ Tambah Eskul</a>
</div>

@if(session('success'))
    <div class="alert-success">{{ session('success') }}</div>
@endif

<div class="admin-table-wrap">
    <table>
        <thead>
            <tr>
                <th>Foto</th>
                <th>Logo</th>
                <th>Nama</th>
                <th>Pembina</th>
                <th>Jadwal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($daftarEskul as $item)
                <td>
            @if($item->foto)
                <img src="{{ asset($item->foto) }}" alt="Foto {{ $item->nama }}" class="admin-thumb-foto">
            @else
        
            @endif
            </td>
            <td>
            @if($item->logo)
                 <img src="{{ asset($item->logo) }}" alt="Logo {{ $item->nama }}" class="admin-thumb-logo">
            @else
        
            @endif
            </td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->pembina }}</td>
                    <td>{{ $item->jadwal }}</td>
                    <td>
                        <a href="{{ route('admin.eskul.edit', $item->id) }}" class="btn-edit">Edit</a>
                        <form action="{{ route('admin.eskul.destroy', $item->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Hapus eskul ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-delete">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">Belum ada data ekstrakurikuler.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

@endsection