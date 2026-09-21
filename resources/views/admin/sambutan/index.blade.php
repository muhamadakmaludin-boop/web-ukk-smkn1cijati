@extends('layouts.admin')

@section('title', 'Kelola Sambutan Kepala Sekolah')

@section('content')
<div class="admin-page-header">
    <h1>Kelola Sambutan Kepala Sekolah</h1>
</div>

@if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <ul style="margin:0; padding-left:18px;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="admin-form-wrap">
    <form action="{{ route('admin.sambutan.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nama_kepsek">Nama Kepala Sekolah</label>
            <input type="text" name="nama_kepsek" id="nama_kepsek"
                   value="{{ old('nama_kepsek', $sambutan->nama_kepsek) }}">
        </div>

        <div class="form-group">
            <label for="foto">Foto (kosongkan jika tidak ingin mengubah)</label>
            @if ($sambutan->foto)
                <div style="margin-bottom:8px;">
                    <img src="{{ asset('image/beranda/' . $sambutan->foto) }}"
                         alt="Foto saat ini" class="admin-thumb">
                </div>
            @endif
            <input type="file" name="foto" id="foto" accept="image/*">
        </div>

        <div class="form-group">
            <label for="isi">Isi Sambutan</label>
            <textarea name="isi" id="isi" rows="10">{{ old('isi', $sambutan->isi) }}</textarea>
        </div>

        <button type="submit" class="btn-primary">Simpan Perubahan</button>
    </form>
</div>
@endsection