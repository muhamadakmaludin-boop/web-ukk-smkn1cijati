<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up(): void
{
    Schema::table('jurusan', function (Blueprint $table) {
        $table->string('kode')->nullable()->after('nama');       // RPL, BD, TKR, APHP
        $table->string('gambar_hero')->nullable()->after('logo'); // background hero (opsional)
        $table->text('kompetensi')->nullable();  // JSON: [{icon,judul,deskripsi}]
        $table->text('fasilitas')->nullable();   // JSON: ["teks", ...] atau ["gambar|teks", ...]
        $table->text('keunggulan')->nullable();  // JSON: [{judul,deskripsi}]
        $table->text('prospek')->nullssable();     // JSON: ["Web Developer", ...]
    });
}

public function down(): void
{
    Schema::table('jurusan', function (Blueprint $table) {
        $table->dropColumn(['kode','gambar_hero','kompetensi','fasilitas','keunggulan','prospek']);
    });
}
};
