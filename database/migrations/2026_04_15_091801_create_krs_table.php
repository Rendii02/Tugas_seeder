<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pwl_kelas_b_krs', function (Blueprint $table) {
            $table->id();
            $table->char('npm', 10);
            $table->char('kode_matakuliah', 8);
            $table->timestamps();

            $table->foreign('npm')->references('npm')->on('pwl_kelas_b_mahasiswa')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('kode_matakuliah')->references('kode_matakuliah')->on('pwl_kelas_b_matakuliah')->onDelete('cascade')->onUpdate('cascade');
            $table->unique(['npm', 'kode_matakuliah']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pwl_kelas_b_krs');
    }
};
