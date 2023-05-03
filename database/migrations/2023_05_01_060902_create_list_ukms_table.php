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
        Schema::create('list_ukms', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nama_ukm')->nullable();
            $table->string('anggota')->nullable();
            $table->foreignId('ketua_id')->references('id')->on('users');
            $table->text('image_logo')->nullable();
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
        Schema::dropIfExists('list_ukms');
    }
};
