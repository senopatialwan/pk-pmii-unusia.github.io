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
        Schema::create('anggota', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nama_lengkap');
            $table->string('email');
            $table->string('nim');
            $table->string('alamat');
            $table->unsignedBigInteger('rayon_id');
            $table->unsignedBigInteger('fakultas_id');
            $table->unsignedBigInteger('prodi_id');
            $table->unsignedBigInteger('angkatan_mapaba_id');
            $table->string('nomor_telepon');
            $table->string('sertifikat_mapaba')->nullable();
            $table->string('foto')->nullable();
            $table->string('cv')->nullable();
            $table->string('ktm')->nullable();
            $table->integer('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anggota');
    }
};
