@extends('layouts.admin')

@section('title', 'Edit Guru')

@section('content')

    <div class="admin-page-header">
        <h2>Edit Data Guru</h2>
        <a href="{{ route('admin.guru.index') }}" class="btn btn-secondary">Kembali</a>
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
        <form action="{{ route('admin.guru.update', $guru->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control" value="{{ old('nama', $guru->nama) }}" required>
            </div>

            <div class="form-group">
                <label for="jabatan">Jabatan</label>
                <input type="text" name="jabatan" id="jabatan" class="form-control" value="{{ old('jabatan', $guru->jabatan) }}" required>
            </div>

            <div class="form-group">
                <label for="mapel">Mata Pelajaran / Bidang</label>
                <input type="text" name="mapel" id="mapel" class="form-control" value="{{ old('mapel', $guru->mapel) }}">
            </div>

            <div class="form-group">
                <label for="urutan">Urutan</label>
                <input type="number" name="urutan" id="urutan" class="form-control" value="{{ old('urutan', $guru->urutan) }}">
            </div>

            <div class="form-group">
                <label for="foto">Foto</label>
                @if ($guru->foto)
                    <div class="admin-current-photo">
                        <img src="{{ asset('image/guru-guru/' . $guru->foto) }}" alt="Foto {{ $guru->nama }}" class="admin-thumb admin-thumb-round">
                    </div>
                @endif
                <input type="file" name="foto" id="foto" class="form-control" accept="image/*">
                <small class="text-muted">Kosongkan jika tidak ingin mengganti foto.</small>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

@endsection