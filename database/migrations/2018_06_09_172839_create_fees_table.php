<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fees', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('academic_id')->unsigned();
            $table->integer('level_id')->unsigned();
            $table->integer('fee_type_id')->unsigned();
            $table->string('fee_heading', 100)->nullable();
            $table->float('mount', 8, 2);
            $table->foreign('academic_id')->references('id')->on('academics');
            $table->foreign('level_id')->references('id')->on('levels');
            $table->foreign('fee_type_id')->references('id')->on('feetypes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fees');
    }
}
