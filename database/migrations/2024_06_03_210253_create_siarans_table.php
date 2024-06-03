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
        Schema::create('siarans', function (Blueprint $table) {
            $table->string('kode_siaran')->primary();
            $table->string('judul');
            $table->date('tgl_waktu'); // ini belum fix
            $table->string('nama_penyiar'); 
            $table->enum('status', ['terjadwal', 'selesai', 'dibatalkan'])->default('terjadwal');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siarans');
    }
};
