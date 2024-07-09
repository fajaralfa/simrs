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
        Schema::create('administrasi_pasien', function (Blueprint $table) {
            $table->id();
            $table->integer('total_biaya');
            $table->integer('bayar')->nullable(); // uang yang diberikan
            $table->enum('status_pembayaran', ['belum', 'sudah']);
            $table->foreignId('pasien_id')->constrained('pasien');
            $table->foreignId('user_id')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('administrasi_pasien');
    }
};
