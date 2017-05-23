<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSequenceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sequences', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('posizione');
            $table->integer('cella');
            $table->bigInteger('delay');
            $table->integer('grid_id')->unsigned()->nullable();
           
        });
         Schema::table('sequences', function (Blueprint $table) {
            $table->foreign('grid_id')->references('id')->on('grids');
            
         });   
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sequences');
    }
}
