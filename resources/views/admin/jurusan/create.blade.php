@extends('layouts.admin')

@section('title', 'Tambah Jurusan')

@section('content')

    <div class="admin-page-header">
        <h2>Tambah Data Jurusan</h2>
        <a href="{{ route('admin.jurusan.index') }}" class="btn btn-secondary">Kembali</a>
    </div>

    @if ($errors->any())
        <div class="alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="admin-form-wrap">
        <form action="{{ route('admin.jurusan.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="nama">Nama Jurusan</label>
                <input type="text" name="nama" id="nama" class="form-control" value="{{ old('nama') }}" required>
            </div>

            <div class="form-group">
                <label for="slug">Slug</label>
                <input type="text" name="slug" id="slug" class="form-control" value="{{ old('slug') }}" placeholder="Kosongkan untuk dibuat otomatis dari nama">
            </div>

            <div class="form-group">
                <label for="deskripsi">Deskripsi Singkat</label>
                <textarea name="deskripsi" id="deskripsi" class="form-control" rows="3" required>{{ old('deskripsi') }}</textarea>
            </div>

            <div class="form-group">
                <label for="deskripsi_lengkap">Deskripsi Lengkap</label>
                <textarea name="deskripsi_lengkap" id="deskripsi_lengkap" class="form-control" rows="6">{{ old('deskripsi_lengkap') }}</textarea>
                @error('prospek')
                    <small style="color:red;">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="prospek">Prospek Kerja</label>
                <textarea name="prospek" id="prospek" rows="4">{{ old('prospek') }}</textarea>
            </div>

            <div class="form-group">
                <label for="nama_kaprog">Nama Kaprog</label>
                <input type="text" name="nama_kaprog" id="nama_kaprog" class="form-control" value="{{ old('nama_kaprog') }}">
            </div>

            <div class="form-group">
                <label for="foto_kaprog">Foto Kaprog</label>
                <input type="file" name="foto_kaprog" id="foto_kaprog" accept="image/*">
            </div>

            <div class="form-group">
                <label for="urutan">Urutan</label>
                <input type="number" name="urutan" id="urutan" class="form-control" value="{{ old('urutan', 0) }}">
            </div>

            <div class="form-group">
                <label for="logo">Logo</label>
                <input type="file" name="logo" id="logo" class="form-control" accept="image/*">
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

@endsection