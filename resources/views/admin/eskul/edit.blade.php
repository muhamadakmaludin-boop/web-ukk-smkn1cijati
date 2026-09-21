@extends('layouts.admin')

@section('title', 'Edit Ekstrakurikuler')

@section('content')

    <div class="admin-page-header">
        <h2>Edit Ekstrakurikuler</h2>
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
        <form action="{{ route('admin.eskul.update', $eskul->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nama">Nama Ekskul</label>
                <input type="text" name="nama" id="nama" value="{{ old('nama', $eskul->nama) }}">
            </div>

            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" rows="4">{{ old('deskripsi', $eskul->deskripsi) }}</textarea>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="pembina">Pembina</label>
                    <input type="text" name="pembina" id="pembina" value="{{ old('pembina', $eskul->pembina) }}">
                </div>

                <div class="form-group">
                    <label for="jadwal">Jadwal</label>
                    <input type="text" name="jadwal" id="jadwal" value="{{ old('jadwal', $eskul->jadwal) }}">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="foto">Foto Kegiatan</label>
                    @if ($eskul->foto)
                        <div class="form-preview">
                            <img src="{{ asset('storage/' . $eskul->foto) }}" alt="Foto {{ $eskul->nama }}">
                        </div>
                    @endif
                    <input type="file" name="foto" id="foto" accept="image/*">
                    <small>Kosongkan jika tidak ingin mengganti foto.</small>
                </div>

                <div class="form-group">
                    <label for="logo">Logo Ekskul</label>
                    @if ($eskul->logo)
                        <div class="form-preview">
                            <img src="{{ asset('storage/' . $eskul->logo) }}" alt="Logo {{ $eskul->nama }}" class="form-preview-round">
                        </div>
                    @endif
                    <input type="file" name="logo" id="logo" accept="image/*">
                    <small>Kosongkan jika tidak ingin mengganti logo.</small>
                </div>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('admin.eskul.index') }}" class="btn">Batal</a>
            </div>
        </form>
    </div>

@endsection