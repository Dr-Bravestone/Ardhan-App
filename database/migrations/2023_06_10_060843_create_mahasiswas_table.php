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
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');
            $table->string('npm', 10);
            $table->string('nama');
            $table->date('tanggal');
            $table->string('kota_lahir');
            $table->string('foto');
            $table->foreign('prodi_id')->references('id')->on('prodis');
            $table->uuid('prodi_id');
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswas');
    }
};
