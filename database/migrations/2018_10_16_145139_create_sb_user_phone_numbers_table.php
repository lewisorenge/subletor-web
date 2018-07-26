<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSbUserPhoneNumbersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sb_phone_numbers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('phone_number');
            $table->enum('verified', ['yes', 'no']);
            $table->enum('public', ['yes', 'no']);
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
        Schema::dropIfExists('sb_user_phone_numbers');
    }
}
