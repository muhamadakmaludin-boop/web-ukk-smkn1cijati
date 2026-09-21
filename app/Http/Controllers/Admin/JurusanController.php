<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Jurusan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class JurusanController extends Controller
{
    public function index()
    {
        $jurusans = Jurusan::orderBy('urutan')->get();
        return view('admin.jurusan.index', compact('jurusans'));
    }

    public function create()
    {
        return view('admin.jurusan.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama'               => 'required|string|max:255',
            'slug'               => 'nullable|string|max:255|unique:jurusan,slug',
            'deskripsi'          => 'required|string',
            'deskripsi_lengkap'  => 'nullable|string',
            'prospek'            => 'required|string',
            'logo'               => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'urutan'             => 'nullable|integer',
            'nama_kaprog'        => 'nullable|string|max:255',
            'foto_kaprog'        => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ], [
            'prospek.required' => 'Prospek jurusan wajib diisi.',
        ]);

        $validated['slug'] = $validated['slug'] ?? Str::slug($validated['nama']);

        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('image/jurusan'), $filename);
            $validated['logo'] = $filename;
        }
        if ($request->hasFile('foto_kaprog')) {
            $folder = 'image/jurusan/' . $validated['slug'];

            if (!file_exists(public_path($folder))) {
                mkdir(public_path($folder), 0755, true);
            }

            $file = $request->file('foto_kaprog');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path($folder), $filename);
            $validated['foto_kaprog'] = $filename;
        }

        Jurusan::create($validated);

        return redirect()->route('admin.jurusan.index')->with('success', 'Data jurusan berhasil ditambahkan.');
    }

    public function edit(Jurusan $jurusan)
    {
        $jurusan->load('fasilitasjurusan');
        return view('admin.jurusan.edit', compact('jurusan'));
    }

    public function update(Request $request, Jurusan $jurusan)
    {
        $validated = $request->validate([
            'nama'               => 'required|string|max:255',
            'slug'               => 'nullable|string|max:255|unique:jurusan,slug,' . $jurusan->id,
            'deskripsi'          => 'required|string',
            'deskripsi_lengkap'  => 'nullable|string',
            'prospek'            => 'required|string',
            'logo'               => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'urutan'             => 'nullable|integer',
            'nama_kaprog'        => 'nullable|string|max:255',
            'foto_kaprog'        => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ], [
            'prospek.required' => 'Prospek jurusan wajib diisi.',
        ]);

        $validated['slug'] = $validated['slug'] ?? Str::slug($validated['nama']);

        if ($request->hasFile('logo')) {
            if ($jurusan->logo && file_exists(public_path('image/jurusan/' . $jurusan->logo))) {
                unlink(public_path('image/jurusan/' . $jurusan->logo));
            }
            $file = $request->file('logo');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('image/jurusan'), $filename);
            $validated['logo'] = $filename;
        }
        if ($request->hasFile('foto_kaprog')) {
            $oldFolder = 'image/jurusan/' . $jurusan->slug;
            if ($jurusan->foto_kaprog && file_exists(public_path($oldFolder . '/' . $jurusan->foto_kaprog))) {
                unlink(public_path($oldFolder . '/' . $jurusan->foto_kaprog));
            }

            $newFolder = 'image/jurusan/' . $validated['slug'];
            if (!file_exists(public_path($newFolder))) {
                mkdir(public_path($newFolder), 0755, true);
            }

            $file = $request->file('foto_kaprog');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path($newFolder), $filename);
            $validated['foto_kaprog'] = $filename;
        }

        $jurusan->update($validated);

        return redirect()->route('admin.jurusan.index')->with('success', 'Data jurusan berhasil diperbarui.');
    }

    public function destroy(Jurusan $jurusan)
    {
        if ($jurusan->logo && file_exists(public_path('image/jurusan/' . $jurusan->logo))) {
            unlink(public_path('image/jurusan/' . $jurusan->logo));
        }

        $folder = 'image/jurusan/' . $jurusan->slug;
        if ($jurusan->foto_kaprog && file_exists(public_path($folder . '/' . $jurusan->foto_kaprog))) {
            unlink(public_path($folder . '/' . $jurusan->foto_kaprog));
        }

        $jurusan->delete();

        return redirect()->route('admin.jurusan.index')->with('success', 'Data jurusan berhasil dihapus.');
    }
}