<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSbTransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sb_transaction', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('property_id');
            $table->integer('receiver_id');
            $table->integer('payee_id');
            $table->integer('booking_id');
            $table->decimal('amount', 10, 2);
            $table->datetime('transfer_on');
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
        Schema::dropIfExists('sb_transaction');
    }
}
