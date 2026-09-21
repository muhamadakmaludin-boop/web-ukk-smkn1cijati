@extends('layouts.admin')

@section('title', 'Edit Galeri')

@section('content')

<div class="admin-page-header">
    <h2>Edit Galeri</h2>
</div>

@if ($errors->any())
    <div class="alert-danger">
        <ul style="margin:0; padding-left:18px;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="admin-form-wrap">
    <form action="{{ route('admin.galeri.update', $galeri->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" name="judul" id="judul" value="{{ old('judul', $galeri->judul) }}" required>
        </div>

        <div class="form-group">
            <label for="kategori">Kategori</label>
            <input type="text" name="kategori" id="kategori" value="{{ old('kategori', $galeri->kategori) }}">
        </div>

        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" rows="3">{{ old('deskripsi', $galeri->deskripsi) }}</textarea>
        </div>

        <div class="form-group">
            <label for="gambar">Gambar saat ini</label>
            <div style="margin-bottom:10px;">
                <img src="{{ asset('image/galeri/' . $galeri->gambar) }}" alt="{{ $galeri->judul }}" style="width:120px; border-radius:6px;">
            </div>
            <input type="file" name="gambar" id="gambar" accept="image/*">
            <small style="color:#6b7280;">Kosongkan jika tidak ingin mengganti gambar.</small>
        </div>

        <div class="form-group">
            <label>
                <input type="checkbox" name="tampil" value="1" {{ old('tampil', $galeri->tampil) ? 'checked' : '' }} style="width:auto;">
                Tampilkan di Beranda
            </label>
        </div>

        <div class="form-group">
            <label for="urutan">Urutan</label>
            <input type="number" name="urutan" id="urutan" value="{{ old('urutan', $galeri->urutan) }}">
        </div>

        <div class="admin-form-actions">
            <button type="submit" class="btn-primary">Update</button>
            <a href="{{ route('admin.galeri.index') }}" class="btn-secondary">Batal</a>
        </div>
    </form>
</div>

@endsection