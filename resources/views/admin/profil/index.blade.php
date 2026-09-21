@extends('layouts.admin')

@section('title', 'Kelola Profil Sekolah')

@section('content')
<div class="admin-page-header">
    <h1>Kelola Profil Sekolah</h1>
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
    <form action="{{ route('admin.profil.update') }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nama_sekolah">Nama Sekolah</label>
            <input type="text" name="nama_sekolah" id="nama_sekolah"
                   value="{{ old('nama_sekolah', $profil->nama_sekolah) }}">
        </div>

        <div class="form-group">
            <label for="npsn">NPSN</label>
            <input type="text" name="npsn" id="npsn"
                   value="{{ old('npsn', $profil->npsn) }}">
        </div>

        <div class="form-group">
            <label for="akreditasi">Akreditasi</label>
            <input type="text" name="akreditasi" id="akreditasi" maxlength="5"
                   value="{{ old('akreditasi', $profil->akreditasi) }}">
        </div>

        <div class="form-group">
            <label for="status_sekolah">Status Sekolah</label>
            <input type="text" name="status_sekolah" id="status_sekolah"
                   value="{{ old('status_sekolah', $profil->status_sekolah) }}">
        </div>

        <div class="form-group">
            <label for="jenjang_pendidikan">Jenjang Pendidikan</label>
            <input type="text" name="jenjang_pendidikan" id="jenjang_pendidikan"
                   value="{{ old('jenjang_pendidikan', $profil->jenjang_pendidikan) }}">
        </div>

        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" id="alamat"
                   value="{{ old('alamat', $profil->alamat) }}">
        </div>

        <div class="form-group">
            <label for="desa_kelurahan">Desa/Kelurahan</label>
            <input type="text" name="desa_kelurahan" id="desa_kelurahan"
                   value="{{ old('desa_kelurahan', $profil->desa_kelurahan) }}">
        </div>

        <div class="form-group">
            <label for="kecamatan">Kecamatan</label>
            <input type="text" name="kecamatan" id="kecamatan"
                   value="{{ old('kecamatan', $profil->kecamatan) }}">
        </div>

        <div class="form-group">
            <label for="kabupaten">Kabupaten</label>
            <input type="text" name="kabupaten" id="kabupaten"
                   value="{{ old('kabupaten', $profil->kabupaten) }}">
        </div>

        <div class="form-group">
            <label for="provinsi">Provinsi</label>
            <input type="text" name="provinsi" id="provinsi"
                   value="{{ old('provinsi', $profil->provinsi) }}">
        </div>

        <div class="form-group">
            <label for="kode_pos">Kode Pos</label>
            <input type="text" name="kode_pos" id="kode_pos"
                   value="{{ old('kode_pos', $profil->kode_pos) }}">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email"
                   value="{{ old('email', $profil->email) }}">
        </div>

        <div class="form-group">
            <label for="telepon">Nomor Telepon</label>
            <input type="text" name="telepon" id="telepon"
                   value="{{ old('telepon', $profil->telepon) }}">
        </div>

        <div class="form-group">
            <label for="website">Website</label>
            <input type="text" name="website" id="website"
                   value="{{ old('website', $profil->website) }}">
        </div>

        <div class="form-group">
            <label for="tahun_berdiri">Tahun Berdiri</label>
            <input type="text" name="tahun_berdiri" id="tahun_berdiri"
                   value="{{ old('tahun_berdiri', $profil->tahun_berdiri) }}">
        </div>

        <div class="form-group">
            <label for="deskripsi">Deskripsi Sekolah</label>
            <textarea name="deskripsi" id="deskripsi" rows="4">{{ old('deskripsi', $profil->deskripsi) }}</textarea>
        </div>

        <div class="form-group">
            <label for="visi">Visi</label>
            <textarea name="visi" id="visi" rows="3">{{ old('visi', $profil->visi) }}</textarea>
        </div>

        <div class="form-group">
            <label for="misi">Misi (satu poin per baris)</label>
            <textarea name="misi" id="misi" rows="6">{{ old('misi', $profil->misi) }}</textarea>
        </div>

        <button type="submit" class="btn-primary">Simpan Perubahan</button>
    </form>
</div>
@endsection