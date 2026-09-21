<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('profil', function (Blueprint $table) {
            $table->id();
            $table->string('nama_sekolah');
            $table->string('npsn');
            $table->string('akreditasi', 5);
            $table->string('status_sekolah');
            $table->string('jenjang_pendidikan');
            $table->string('alamat');
            $table->string('desa_kelurahan');
            $table->string('kecamatan');
            $table->string('kabupaten');
            $table->string('provinsi');
            $table->string('kode_pos');
            $table->string('email');
            $table->string('telepon');
            $table->string('website')->nullable();
            $table->string('tahun_berdiri');
            $table->text('deskripsi');
            $table->text('visi');
            $table->text('misi'); // disimpan per baris, dipisah "\n"
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('profil');
    }
};