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
        Schema::create('users_topis', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('password');
            $table->string('title');
            $table->string('hl_image');
            $table->string('main_image');
            $table->text('body');
            $table->string('kokopoi_question');
            $table->text('kokopoi_answer');
            $table->string('emb_img_title');
            $table->string('emb_img');
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
        Schema::dropIfExists('users_topis');
    }
};
