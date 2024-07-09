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
        Schema::create('tindakan_yang_dilakukan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('administrasi_pasien_id')->constrained('administrasi_pasien');
            $table->foreignId('tindakan_medis_id')->constrained('tindakan_medis');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tindakan_yang_dilakukan');
    }
};
