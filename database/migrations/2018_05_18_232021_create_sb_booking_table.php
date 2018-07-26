<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSbBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sb_booking', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('property_id');
            $table->integer('user_id');
            $table->datetime('check_in_time');
            $table->datetime('check_out_time');
            $table->decimal('price_for_stay')->nullable();
            $table->datetime('cancel_date')->nullable();
            $table->decimal('refund_paid', 10, 2)->nullable();
            $table->integer('transaction_id')->nullable();
            $table->datetime('booking_date');
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
        Schema::dropIfExists('sb_booking');
    }
}
