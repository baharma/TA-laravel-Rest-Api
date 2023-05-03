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
        Schema::create('sertif_relasi', function (Blueprint $table) {
            $table->id();
            $table->foreignUuid('pendaftaran_id')->references('id')->on('pendaftaran_events');
            $table->foreignUuid('sertif_id')->references('id')->on('sertifs');
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
        Schema::dropIfExists('sertif_relasi');
    }
};
