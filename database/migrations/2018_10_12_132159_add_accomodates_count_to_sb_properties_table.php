<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAccomodatesCountToSbPropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sb_property', function (Blueprint $table) {
            $table->dropColumn('table_count');
            $table->dropColumn('seat_count');
            $table->dropColumn('persons_count');
            
            $table->string('accomodates_count', 255)->after('room_number');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sb_properties', function (Blueprint $table) {
            $table->string('table_count', 255);
            $table->string('seat_count', 255);
            $table->string('persons_count', 255);

            $table->dropColumn('accomodates_count');
        });
    }
}
