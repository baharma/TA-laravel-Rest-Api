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
        Schema::create('member_event', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->boolean('absen')->default(0);
            $table->foreignUuid('event_id')->references('id')->on('event')->nullable();
            $table->string('tlp')->nullable();
            $table->string('role')->nullable();
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
        Schema::dropIfExists('member_event');
    }
};
