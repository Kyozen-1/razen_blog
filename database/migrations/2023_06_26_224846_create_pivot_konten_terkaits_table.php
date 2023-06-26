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
        Schema::create('pivot_konten_terkaits', function (Blueprint $table) {
            $table->id();
            $table->foreignId('parent_id')->nullable();
            $table->foreign('parent_id')->references('id')->on('kontens')->onDelete('cascade');
            $table->foreignId('child_id')->nullable();
            $table->foreign('child_id')->references('id')->on('kontens')->onDelete('cascade');
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
        Schema::dropIfExists('pivot_konten_terkaits');
    }
};
