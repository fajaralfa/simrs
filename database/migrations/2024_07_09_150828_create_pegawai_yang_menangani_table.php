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
        Schema::create('pegawai_yang_menangani', function (Blueprint $table) {
            $table->id();
            $table->foreignId('administrasi_pasien_id')->constrained('administrasi_pasien');
            $table->foreignId('pegawai_id')->constrained('pegawai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pegawai_yang_menangani');
    }
};
