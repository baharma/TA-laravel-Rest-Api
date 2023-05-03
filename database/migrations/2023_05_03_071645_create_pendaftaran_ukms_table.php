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
        Schema::create('pendaftaran_ukms', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name')->nullable();
            $table->foreignUuid('ukm_id')->references('id')->on('list_ukms')->nullable();
            $table->string('nim')->nullable();
            $table->string('semester')->nullable();
            $table->string('tlp')->nullable();
            $table->string('alamat')->nullable();
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
        Schema::dropIfExists('pendaftaran_ukms');
    }
};
