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
        Schema::create('pivot_sub_judul_kontens', function (Blueprint $table) {
            $table->id();
            $table->foreignId('konten_id')->nullable();
            $table->foreign('konten_id')->references('id')->on('kontens')->onDelete('cascade');
            $table->string('judul')->nullable();
            $table->longText('deskripsi')->nullable();
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
        Schema::dropIfExists('pivot_sub_judul_kontens');
    }
};
