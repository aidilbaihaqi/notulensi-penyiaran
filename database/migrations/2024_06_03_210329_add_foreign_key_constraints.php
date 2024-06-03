<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('notulensis', function (Blueprint $table){
            $table->foreign('kode_siaran')
            ->references('kode_siaran')
            ->on('siarans')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
        Schema::table('arsips', function (Blueprint $table){
            $table->foreign('kode_siaran')
            ->references('kode_siaran')
            ->on('siarans')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
