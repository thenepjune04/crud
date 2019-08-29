<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVehicles2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles2', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('brand')->nullable();
            $table->string('series')->nullable();
            $table->string('colour')->nullable();
            $table->integer('year')->nullable();
            $table->float('mileage')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('vehicles2');
    }
}
