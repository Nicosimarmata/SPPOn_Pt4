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
        Schema::create('angsuran', function (Blueprint $table) {
            $table->id("id_angsuran");
            $table->unsignedBigInteger("id_tagihan");
            $table->string("bukti_bayar");
            $table->integer("nom_angsuran");
            $table->enum("status_validasi",["terverifikasi","belum-terverifikasi"])->default("belum-terverifikasi");

            $table->foreign('id_tagihan')->references('id_tagihan')->on('tagihan_pembayaran')->onDelete('cascade');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('angsuran');
    }
};
