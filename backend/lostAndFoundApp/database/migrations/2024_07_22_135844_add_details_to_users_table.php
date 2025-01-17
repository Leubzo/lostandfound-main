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
        Schema::table('users', function (Blueprint $table) {
        $table->string('phone_number')->nullable();
        $table->string('telegram_id')->nullable();
        $table->string('picture')->nullable();
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          Schema::table('users', function (Blueprint $table) {
        $table->dropColumn(['phone_number', 'telegram_id', 'picture']);
    });

    }
};
