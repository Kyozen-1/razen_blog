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
        Schema::create('pivot_konten_and_webs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('konten_id')->nullable();
            $table->foreign('konten_id')->references('id')->on('kontens')->onDelete('cascade');
            $table->foreignId('master_web_id')->nullable();
            $table->foreign('master_web_id')->references('id')->on('master_webs')->onDelete('cascade');
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
        Schema::dropIfExists('pivot_konten_and_webs');
    }
};
