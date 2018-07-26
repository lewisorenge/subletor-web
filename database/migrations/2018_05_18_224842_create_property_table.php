<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sb_property', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255);
            $table->text('description');
            $table->integer('user_id');
            $table->integer('category_id');
            $table->string('latitude', 255)->nullable();
            $table->string('longitude', 255)->nullable();
            $table->string('street_address');
            $table->string('building');
            $table->string('floor');
            $table->string('room_number');
            $table->string('table_count', 255);
            $table->string('seat_count', 255);
            $table->string('persons_count', 255);
            $table->time('opening_hours');
            $table->time('closing_hours');
            $table->string('closed_days')->nullable();
            $table->decimal('price', 10);
            $table->enum('price_duration', array('hour', 'day', 'week', '2weeks', 'month', '3months'));
            $table->string('minimum_stay', 255);
            $table->boolean('guests_allowed')->default(0);
            $table->date('start_date');
            // $table->date('end_date');
            $table->timestamps();
            $table->tinyInteger('status')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sb_property');
    }
}
