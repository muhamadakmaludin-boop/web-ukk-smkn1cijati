<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Admin') - {{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts / Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Figtree', sans-serif;
            background: #f3f4f6;
            margin: 0;
        }
        .admin-wrapper {
            display: flex;
            min-height: 100vh;
        }
        .admin-sidebar {
            width: 230px;
            background: #1f2937;
            color: #e5e7eb;
            flex-shrink: 0;
            padding: 20px 0;
        }
        .admin-sidebar h1 {
            font-size: 16px;
            padding: 0 20px 16px;
            margin: 0 0 16px;
            border-bottom: 1px solid #374151;
        }
        .admin-sidebar a {
            display: block;
            padding: 10px 20px;
            color: #d1d5db;
            text-decoration: none;
            font-size: 14px;
        }
        .admin-sidebar a:hover,
        .admin-sidebar a.active {
            background: #374151;
            color: #fff;
        }
        .admin-main {
            flex: 1;
            padding: 30px;
        }
        .admin-topbar {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            margin-bottom: 20px;
            gap: 12px;
        }
        .admin-topbar form {
            margin: 0;
        }
        .admin-page-header h2 {
            margin: 0 0 4px;
        }
        .admin-page-header p {
            margin: 0 0 20px;
            color: #6b7280;
            font-size: 14px;
        }
        .alert-success {
            background: #d1fae5;
            color: #065f46;
            padding: 12px 16px;
            border-radius: 6px;
            margin-bottom: 16px;
            font-size: 14px;
        }
        .alert-danger {
            background: #fee2e2;
            color: #991b1b;
            padding: 12px 16px;
            border-radius: 6px;
            margin-bottom: 16px;
            font-size: 14px;
        }
        .admin-form-wrap,
        .admin-table-wrap {
            background: #fff;
            padding: 24px;
            border-radius: 8px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }
        .form-group {
            margin-bottom: 16px;
        }
        .form-group label {
            display: block;
            margin-bottom: 6px;
            font-size: 14px;
            font-weight: 600;
            color: #374151;
        }
        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 8px 12px;
            border: 1px solid #d1d5db;
            border-radius: 6px;
            font-size: 14px;
            box-sizing: border-box;
        }
        .admin-form-actions {
            display: flex;
            gap: 10px;
            align-items: center;
        }
        .btn-primary,
        .btn-secondary {
            display: inline-block;
            padding: 8px 16px;
            border-radius: 6px;
            font-size: 14px;
            text-decoration: none;
            border: none;
            cursor: pointer;
        }
        .btn-primary {
            background: #2563eb;
            color: #fff;
        }
        .btn-primary:hover {
            background: #1d4ed8;
        }
        .btn-secondary {
            background: #e5e7eb;
            color: #111827;
        }
        .btn-secondary:hover {
            background: #d1d5db;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table th,
        table td {
            text-align: left;
            padding: 10px 12px;
            border-bottom: 1px solid #e5e7eb;
            font-size: 14px;
        }
        img.admin-thumb-guru {
            width: 60px;
            height: 80px;
            object-fit: cover;
            border-radius: 6px;
            border: 1px solid #e5e7eb;
            display: block;
        }
    </style>

    @stack('styles')
</head>
<body>
    <div class="admin-wrapper">
        <aside class="admin-sidebar">
            <h1>Admin Panel</h1>
            <a href="{{ route('admin.home.edit') }}">Beranda</a>
            <a href="{{ route('admin.berita.index') }}">Berita</a>
            <a href="{{ route('admin.eskul.index') }}">Ekstrakurikuler</a>
            <a href="{{ route('admin.guru.index') }}">Guru</a>
            <a href="{{ route('admin.jurusan.index') }}">Jurusan</a>
            <a href="{{ route('admin.galeri.index') }}">Galeri</a>
            <a href="{{ route('admin.fasilitas-sekolah.index') }}">Fasilitas Sekolah</a>
            <a href="{{ route('admin.profil.edit') }}">Profil Sekolah</a>
            <a href="{{ route('admin.sambutan.edit') }}">Sambutan Kepsek</a>
        </aside>

        <div class="admin-main">
            <div class="admin-topbar">
                <span>{{ auth()->user()->name ?? '' }}</span>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn-secondary">Logout</button>
                </form>
            </div>

            @yield('content')
        </div>
    </div>

    @stack('scripts')
</body>
</html>