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
        Schema::create('pivot_penulis_media_sosials', function (Blueprint $table) {
            $table->id();
            $table->foreignId('media_sosial_id')->nullable();
            $table->foreign('media_sosial_id')->references('id')->on('master_media_sosials')->onDelete('cascade');
            $table->foreignId('penulis_id')->nullable();
            $table->foreign('penulis_id')->references('id')->on('penulis')->onDelete('cascade');
            $table->text('tautan')->nullable();
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
        Schema::dropIfExists('pivot_penulis_media_sosials');
    }
};
