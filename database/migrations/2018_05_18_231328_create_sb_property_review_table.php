<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSbPropertyReviewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sb_property_review', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('property_id');
            $table->integer('review_by_user');
            $table->integer('booking_id');
            $table->text('comment');
            $table->string('rating', 255);
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
        Schema::dropIfExists('sb_property_review');
    }
}
