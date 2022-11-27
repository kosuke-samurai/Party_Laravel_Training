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
        Schema::table('users_topis', function (Blueprint $table) {
            $table->foreignId('administrators_id')->after('emb_img')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users_topis', function (Blueprint $table) {
            $table->dropConstrainedForeignId('administrators_id');
        });
    }
};
