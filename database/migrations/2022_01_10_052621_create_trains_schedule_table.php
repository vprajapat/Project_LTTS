<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsScheduleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains_schedule', function (Blueprint $table) {
            $table->id('trains_schedule_id');
            $table->unsignedBigInteger('train_id');
            $table->foreign('train_id')->references('train_id')->on('trains');
            $table->unsignedBigInteger('station_id');
            $table->foreign('station_id')->references('station_id')->on('stations');
            $table->unsignedBigInteger('sub_station_id');
            $table->foreign('sub_station_id')->references('sub_station_id')->on('sub_stations');
            $table->date('depart_date');
            $table->date('return_date');
            $table->time('depart_time');
            $table->time('return_time');
            
            $table->boolean('status');
            
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
        Schema::dropIfExists('trains_schedule');
    }
}
