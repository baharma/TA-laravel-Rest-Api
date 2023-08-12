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
            $table->foreignUuid('member_event_id')->references('id')->on('member_event');
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
