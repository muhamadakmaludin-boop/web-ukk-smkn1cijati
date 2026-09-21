@extends('layouts.admin')

@section('title', 'Edit Fasilitas Sekolah')

@section('content')

<div class="admin-page-header">
    <h2>Edit Fasilitas Sekolah</h2>
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
    <form action="{{ route('admin.fasilitas-sekolah.update', $fasilitas->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nama">Nama Fasilitas</label>
            <input type="text" name="nama" id="nama" value="{{ old('nama', $fasilitas->nama) }}" required>
        </div>

        <div class="form-group">
            <label for="poto">Foto</label>
            @if ($fasilitas->poto)
                <div style="margin-bottom:10px;">
                    <img src="{{ asset('image/pasilitas/' . $fasilitas->poto) }}" alt="{{ $fasilitas->nama }}" style="width:120px; border-radius:6px;">
                </div>
            @endif
            <input type="file" name="poto" id="poto" accept="image/*">
            <small style="color:#6b7280;">Kosongkan jika tidak ingin mengganti foto.</small>
        </div>

        <div class="admin-form-actions">
            <button type="submit" class="btn-primary">Update</button>
            <a href="{{ route('admin.fasilitas-sekolah.index') }}" class="btn-secondary">Batal</a>
        </div>
    </form>
</div>

@endsection