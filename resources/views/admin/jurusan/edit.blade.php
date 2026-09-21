@extends('layouts.admin')

@section('title', 'Edit Jurusan')

@section('content')

    <div class="admin-page-header">
        <h2>Edit Data Jurusan</h2>
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
        <form action="{{ route('admin.jurusan.update', $jurusan->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nama">Nama Jurusan</label>
                <input type="text" name="nama" id="nama" class="form-control" value="{{ old('nama', $jurusan->nama) }}" required>
            </div>

            <div class="form-group">
                <label for="slug">Slug</label>
                <input type="text" name="slug" id="slug" class="form-control" value="{{ old('slug', $jurusan->slug) }}">
            </div>

            <div class="form-group">
                <label for="deskripsi">Deskripsi Singkat</label>
                <textarea name="deskripsi" id="deskripsi" class="form-control" rows="3" required>{{ old('deskripsi', $jurusan->deskripsi) }}</textarea>
            </div>

            <div class="form-group">
                <label for="deskripsi_lengkap">Deskripsi Lengkap</label>
                <textarea name="deskripsi_lengkap" id="deskripsi_lengkap" class="form-control" rows="6">{{ old('deskripsi_lengkap', $jurusan->deskripsi_lengkap) }}</textarea>
            </div>

            <div class="form-group">
                <label for="prospek">Prospek Kerja</label>
                <textarea name="prospek" id="prospek" rows="4" required>{{ old('prospek', $jurusan->prospek) }}</textarea>
            </div>

             <div class="form-group">
                <label for="nama_kaprog">Nama Kaprog</label>
                <input type="text" name="nama_kaprog" id="nama_kaprog" value="{{ old('nama_kaprog', $jurusan->nama_kaprog) }}">
            </div>

            <div class="form-group">
                <label for="foto_kaprog">Foto Kaprog</label>
                @if ($jurusan->foto_kaprog)
                    <div class="admin-current-photo">
                        <img src="{{ asset('image/jurusan/' . $jurusan->slug . '/' . $jurusan->foto_kaprog) }}" alt="Kaprog {{ $jurusan->nama_kaprog }}" class="admin-thumb admin-thumb-round">
                    </div>
                @endif
                <input type="file" name="foto_kaprog" id="foto_kaprog" accept="image/*">
                <small class="text-muted">Kosongkan jika tidak ingin mengganti foto.</small>
            </div>

            <div class="form-group">
                <label for="urutan">Urutan</label>
                <input type="number" name="urutan" id="urutan" class="form-control" value="{{ old('urutan', $jurusan->urutan) }}">
            </div>

            <div class="form-group">
                <label for="logo">Logo</label>
                @if ($jurusan->logo)
                    <div class="admin-current-photo">
                        <img src="{{ asset('image/jurusan/' . $jurusan->logo) }}" alt="Logo {{ $jurusan->nama }}" class="admin-thumb admin-thumb-round">
                    </div>
                @endif
                <input type="file" name="logo" id="logo" class="form-control" accept="image/*">
                <small class="text-muted">Kosongkan jika tidak ingin mengganti logo.</small>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

    <div class="admin-form-wrap" style="margin-top: 24px;">
        <h2>Fasilitas Jurusan Ini</h2>

        <table class="admin-table" style="margin-bottom: 16px;">
            <thead>
                <tr><th>Foto</th><th>Nama</th><th>Aksi</th></tr>
            </thead>
            <tbody>
                @forelse($jurusan->fasilitasjurusan as $f)
                    <tr>
                        <td>
                            @if($f->foto)
                                <img src="{{ asset('image/pasilitas/' . $f->foto) }}" width="70">
                            @endif
                        </td>
                        <td>{{ $f->nama }}</td>
                        <td>
                            <form action="{{ route('admin.fasilitas.destroy', $f->id) }}" method="POST" onsubmit="return confirm('Hapus fasilitas ini?')">
                                @csrf @method('DELETE')
                                <button type="submit" class="btn btn-secondary">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="3">Belum ada fasilitas.</td></tr>
                @endforelse
            </tbody>
        </table>

        <form action="{{ route('admin.fasilitas.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="jurusan_id" value="{{ $jurusan->id }}">
            <div class="form-group">
                <label>Nama Fasilitas</label>
                <input type="text" name="nama" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Foto</label>
                <input type="file" name="foto" class="form-control" accept="image/*">
            </div>
            <button type="submit" class="btn btn-primary">+ Tambah Fasilitas</button>
        </form>
    </div>

@endsection