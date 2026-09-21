<?php
// database/migrations/xxxx_xx_xx_create_homes_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('berandas', function (Blueprint $table) {
        $table->id();
        $table->string('hero_judul');
        $table->text('hero_deskripsi');
        $table->string('hero_gambar')->nullable();
        $table->text('sambutan_isi');
        $table->string('sambutan_nama_kepsek')->nullable();
        $table->string('sambutan_foto')->nullable();
        $table->integer('jumlah_guru')->default(0);
        $table->integer('jumlah_siswa')->default(0);
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('berandas');
}
};