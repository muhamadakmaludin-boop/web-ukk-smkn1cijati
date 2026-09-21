@extends('layouts.admin')

@section('title', 'Tambah Fasilitas Sekolah')

@section('content')

<div class="admin-page-header">
    <h2>Tambah Fasilitas Sekolah</h2>
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
    <form action="{{ route('admin.fasilitas-sekolah.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="nama">Nama Fasilitas</label>
            <input type="text" name="nama" id="nama" value="{{ old('nama') }}" required>
        </div>

        <div class="form-group">
            <label for="poto">Foto</label>
            <input type="file" name="poto" id="poto" accept="image/*">
        </div>

        <div class="admin-form-actions">
            <button type="submit" class="btn-primary">Simpan</button>
            <a href="{{ route('admin.fasilitas-sekolah.index') }}" class="btn-secondary">Batal</a>
        </div>
    </form>
</div>

@endsection