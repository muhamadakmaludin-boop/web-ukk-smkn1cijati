<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('home', function (Blueprint $table) {
            $table->string('hero_judul')->nullable()->after('id');
            $table->text('hero_text')->nullable()->after('hero_judul');
        });
    }

    public function down(): void
    {
        Schema::table('home', function (Blueprint $table) {
            $table->dropColumn(['hero_judul', 'hero_text']);
        });
    }
};