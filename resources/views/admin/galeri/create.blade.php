@extends('layouts.admin')

@section('title', 'Tambah Galeri')

@section('content')

<div class="admin-page-header">
    <h2>Tambah Galeri</h2>
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
    <form action="{{ route('admin.galeri.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" name="judul" id="judul" value="{{ old('judul') }}" required>
        </div>

        <div class="form-group">
            <label for="kategori">Kategori</label>
            <input type="text" name="kategori" id="kategori" value="{{ old('kategori') }}">
        </div>

        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" rows="3">{{ old('deskripsi') }}</textarea>
        </div>

        <div class="form-group">
            <label for="gambar">Gambar</label>
            <input type="file" name="gambar" id="gambar" accept="image/*" required>
        </div>

        <div class="form-group">
            <label>
                <input type="checkbox" name="tampil" value="1" checked style="width:auto;">
                Tampilkan di Beranda
            </label>
        </div>

        <div class="form-group">
            <label for="urutan">Urutan</label>
            <input type="number" name="urutan" id="urutan" value="{{ old('urutan', 0) }}">
        </div>

        <div class="admin-form-actions">
            <button type="submit" class="btn-primary">Simpan</button>
            <a href="{{ route('admin.galeri.index') }}" class="btn-secondary">Batal</a>
        </div>
    </form>
</div>

@endsection