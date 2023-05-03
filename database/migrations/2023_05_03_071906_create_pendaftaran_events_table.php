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
        Schema::create('pendaftaran_events', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name')->nullable();
            $table->string('tlp')->nullable();
            $table->string('agama')->nullable();
            $table->foreignUuid('ukm_id')->references('id')->on('list_ukms');
            $table->string('prodi')->nullable();
            $table->foreignUuid('post_id')->references('id')->on('post_events');
            $table->foreignUuid('sertif_id')->references('id')->on('sertifs');
            $table->string('absen')->nullable();
            $table->foreignId('user_id')->references('id')->on('users')->nullable();
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
        Schema::dropIfExists('pendaftaran_events');
    }
};
