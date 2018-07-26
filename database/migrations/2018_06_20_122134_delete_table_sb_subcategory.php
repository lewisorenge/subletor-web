<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DeleteTableSbSubcategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('sb_subcategory');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('sb_subcategory', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id');
            $table->string('name', 255);
            $table->text('description');
            $table->timestamps();
            $table->tinyInteger('status')->default(1);
        });
    }
}
