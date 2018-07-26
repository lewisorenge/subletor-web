<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropWardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('sb_ward');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('sb_ward', function (Blueprint $table) {
            $table->increments('id');
            $table->string('town_id');
            $table->string('name');
            $table->timestamps();
            $table->tinyInteger('status')->default(1);
        });
    }
}
