<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kontens', function (Blueprint $table) {
            $table->id();
            $table->foreignId('penulis_id')->nullable();
            $table->foreign('penulis_id')->references('id')->on('penulis')->onDelete('cascade');
            $table->enum('is_admin', [1, 0])->nullable();
            $table->foreignId('kategori_konten_id')->nullable();
            $table->foreign('kategori_konten_id')->references('id')->on('master_kategori_kontens')->onDelete('cascade');
            $table->string('judul')->nullable();
            $table->longText('deskripsi_judul')->nullable();
            $table->longText('deskripsi_overview')->nullable();
            $table->longText('sinopsis')->nullable();
            $table->string('gambar')->nullable();
            $table->date('tgl')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kontens');
    }
};
