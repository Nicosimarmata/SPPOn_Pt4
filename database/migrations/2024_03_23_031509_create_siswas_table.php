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
        Schema::create('siswa', function (Blueprint $table) {
            $table->id("id_siswa");
            $table->unsignedBigInteger("id_pengguna");
            $table->unsignedBigInteger("id_ortu");
            $table->unsignedBigInteger("id_kelas");
            $table->enum("jenis_kelamin",["laki-laki","perempuan"]);
            $table->string("agama",10);
            $table->enum("status_ortu",["yatim","piatu","yatim-piatu"]);

            $table->foreign('id_pengguna')->references('id_pengguna')->on('pengguna')->onDelete('cascade');
            $table->foreign('id_ortu')->references('id_ortu')->on('orang_tua')->onDelete('cascade');
            $table->foreign('id_kelas')->references('id_kelas')->on('kelas')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswa');
    }
};
