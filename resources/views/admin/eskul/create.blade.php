@extends('layouts.admin')

@section('title', 'Tambah Ekstrakurikuler')

@section('content')

    <div class="admin-page-header">
        <h2>Tambah Ekstrakurikuler</h2>
        <a href="{{ route('admin.eskul.index') }}" class="btn btn-sm">Kembali</a>
    </div>

    @if ($errors->any())
        <div class="alert-error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="admin-form-wrap">
        <form action="{{ route('admin.eskul.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="nama">Nama Ekskul</label>
                <input type="text" name="nama" id="nama" value="{{ old('nama') }}" placeholder="Contoh: Pramuka">
            </div>

            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" rows="4" placeholder="Deskripsi singkat kegiatan ekstrakurikuler">{{ old('deskripsi') }}</textarea>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="pembina">Pembina</label>
                    <input type="text" name="pembina" id="pembina" value="{{ old('pembina') }}" placeholder="Nama pembina">
                </div>

                <div class="form-group">
                    <label for="jadwal">Jadwal</label>
                    <input type="text" name="jadwal" id="jadwal" value="{{ old('jadwal') }}" placeholder="Contoh: Jumat, 13.00 WIB">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="foto">Foto Kegiatan</label>
                    <input type="file" name="foto" id="foto" accept="image/*">
                </div>

                <div class="form-group">
                    <label for="logo">Logo Ekskul</label>
                    <input type="file" name="logo" id="logo" accept="image/*">
                </div>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('admin.eskul.index') }}" class="btn">Batal</a>
            </div>
        </form>
    </div>

@endsection