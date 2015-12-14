<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devices', function(Blueprint $table){

            $table->increments('id');
            $table->string('device_nr', 45);

            //for statistics
            $table->string('city', 45)->nullable();
            $table->string('car_brand', 45)->nullable();
            $table->string('car_color', 45)->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('devices');
    }
}
