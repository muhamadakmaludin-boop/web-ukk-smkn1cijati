@extends('admin.layout')

@section('title', 'Sambutan Kepala Sekolah')

@section('content')

<div class="admin-card">
    <h2>Edit Sambutan Kepala Sekolah</h2>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.sambutan.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nama">Nama Kepala Sekolah</label>
            <input type="text" name="nama" id="nama" class="form-control"
                   value="{{ old('nama', $sambutan->nama) }}">
        </div>

        <div class="form-group">
            <label for="jabatan">Jabatan</label>
            <input type="text" name="jabatan" id="jabatan" class="form-control"
                   value="{{ old('jabatan', $sambutan->jabatan) }}">
        </div>

        <div class="form-group">
            <label for="isi">Isi Sambutan</label>
            <textarea name="isi" id="isi" rows="8" class="form-control">{{ old('isi', $sambutan->isi) }}</textarea>
        </div>

        <div class="form-group">
            <label for="foto">Foto</label><br>
            @if ($sambutan->foto)
                <img src="{{ asset('image/beranda/' . $sambutan->foto) }}"
                     alt="Foto {{ $sambutan->nama }}"
                     style="max-width: 150px; display: block; margin-bottom: 10px;">
            @endif
            <input type="file" name="foto" id="foto" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>

@endsection