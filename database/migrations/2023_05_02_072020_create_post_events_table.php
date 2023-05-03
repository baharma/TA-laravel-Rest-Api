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
        Schema::create('post_events', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('title_name')->nullable();
            $table->string('slug')->unique();
            $table->string('description')->nullable();
            $table->text('image')->nullable();
            $table->string('address_event')->nullable();
            $table->foreignUuid('ukm_id')->references('id')->on('list_ukms');
            $table->foreignId('user_post')->references('id')->on('users');
            $table->timestamp('start_register')->nullable();
            $table->timestamp('end_register')->nullable();
            $table->string('tlp')->nullable();
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
        Schema::dropIfExists('post_events');
    }
};
