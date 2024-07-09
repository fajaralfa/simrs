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
        Schema::create('obat_yang_dibutuhkan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('administrasi_pasien_id')->constrained('administrasi_pasien');
            $table->foreignId('obat_id')->constrained('obat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('obat_yang_dibutuhkan');
    }
};
