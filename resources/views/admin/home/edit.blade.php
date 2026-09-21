@extends('layouts.admin')

@section('content')
<style>
    .form-card {
        background: #fff;
        border-radius: 10px;
        padding: 32px;
        max-width: 720px;
        box-shadow: 0 1px 4px rgba(0,0,0,0.08);
    }
    .form-card h1 {
        font-size: 22px;
        margin-bottom: 24px;
        color: #1a1a1a;
    }
    .form-group {
        margin-bottom: 20px;
    }
    .form-group label {
        display: block;
        font-weight: 600;
        font-size: 14px;
        margin-bottom: 6px;
        color: #333;
    }
    .form-group input[type="text"],
    .form-group input[type="number"],
    .form-group textarea {
        width: 100%;
        padding: 10px 12px;
        border: 1px solid #d1d5db;
        border-radius: 6px;
        font-size: 14px;
        box-sizing: border-box;
    }
    .form-group textarea {
        resize: vertical;
        min-height: 90px;
    }
    .form-row {
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        gap: 16px;
    }
    .form-row .form-group {
        margin-bottom: 0;
    }
    .btn-save {
        background: #2563eb;
        color: #fff;
        border: none;
        padding: 12px 24px;
        border-radius: 6px;
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
        margin-top: 8px;
    }
    .btn-save:hover {
        background: #1d4ed8;
    }
    .alert-success {
        background: #dcfce7;
        color: #166534;
        padding: 12px 16px;
        border-radius: 6px;
        margin-bottom: 20px;
        font-size: 14px;
    }
    .field-error {
        color: #dc2626;
        font-size: 12px;
        margin-top: 4px;
        display: block;
    }
    @media (max-width: 700px) {
        .form-row {
            grid-template-columns: 1fr 1fr;
        }
    }
</style>

<div class="form-card">
    <h1>Tampilan Beranda</h1>

    @if (session('success'))
        <div class="alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('admin.home.update') }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label>Judul Hero</label>
            <input type="text" name="hero_judul" value="{{ old('hero_judul', $home->hero_judul) }}">
            @error('hero_judul') <span class="field-error">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label>Teks Hero</label>
            <textarea name="hero_text">{{ old('hero_text', $home->hero_text) }}</textarea>
            @error('hero_text') <span class="field-error">{{ $message }}</span> @enderror
        </div>

        <div class="form-row">
            <div class="form-group">
                <label>Jumlah Guru</label>
                <input type="number" name="jumlah_guru" value="{{ old('jumlah_guru', $home->jumlah_guru) }}">
            </div>
            <div class="form-group">
                <label>Jumlah Siswa</label>
                <input type="number" name="jumlah_siswa" value="{{ old('jumlah_siswa', $home->jumlah_siswa) }}">
            </div>
            <div class="form-group">
                <label>Jumlah Ekskul</label>
                <input type="number" name="jumlah_ekskul" value="{{ old('jumlah_ekskul', $home->jumlah_ekskul) }}">
            </div>
            <div class="form-group">
                <label>Jumlah Jurusan</label>
                <input type="number" name="jumlah_jurusan" value="{{ old('jumlah_jurusan', $home->jumlah_jurusan) }}">
            </div>
            <div class="form-group">
                <label>Jumlah Kelas</label>
                <input type="number" name="jumlah_kelas" value="{{ old('jumlah_kelas', $home->jumlah_kelas) }}">
            </div>
        </div>

        <button type="submit" class="btn-save">Simpan Perubahan</button>
    </form>
</div>
@endsection