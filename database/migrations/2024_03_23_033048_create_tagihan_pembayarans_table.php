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
        Schema::create('tagihan_pembayaran', function (Blueprint $table) {
            $table->id("id_tagihan");
            $table->unsignedBigInteger("id_siswa");
            $table->integer("nom_tagihan");
            $table->integer("nom_tunggakan");
            $table->string("bulan");
            $table->enum("status",["lunas","belum-lunas"])->default("belum-lunas");
            $table->foreign('id_siswa')->references('id_siswa')->on('siswa')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tagihan_pembayaran');
    }
};
