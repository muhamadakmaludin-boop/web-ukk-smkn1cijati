@extends('layouts.admin')

@section('title', 'Tambah Guru')

@section('content')

    <div class="admin-page-header">
        <h2>Tambah Data Guru</h2>
        <a href="{{ route('admin.guru.index') }}" class="btn-secondary">Kembali</a>
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
        <form action="{{ route('admin.guru.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" value="{{ old('nama') }}" required>
            </div>

            <div class="form-group">
                <label for="jabatan">Jabatan</label>
                <input type="text" name="jabatan" id="jabatan" value="{{ old('jabatan') }}" required>
            </div>

            <div class="form-group">
                <label for="mapel">Mata Pelajaran / Bidang</label>
                <input type="text" name="mapel" id="mapel" value="{{ old('mapel') }}">
            </div>

            <div class="form-group">
                <label for="foto">Foto</label>
                <input type="file" name="foto" id="foto" accept="image/*">
            </div>

            <div class="admin-form-actions">
                <button type="submit" class="btn-primary">Simpan</button>
                <a href="{{ route('admin.guru.index') }}" class="btn-secondary">Batal</a>
            </div>

        </form>
    </div>

@endsection