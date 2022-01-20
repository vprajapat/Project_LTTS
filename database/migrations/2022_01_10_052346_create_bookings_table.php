<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
        $table->id('book_id');
        $table->unsignedBigInteger('train_id'); 
        $table->foreign('train_id')->references('train_id')->on('trains'); 
        $table->unsignedBigInteger('cust_id'); 
        $table->foreign('cust_id')->references('cust_id')->on('customers'); 
        $table->integer('seat_amount');
        $table->time('book_date');

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
        Schema::dropIfExists('bookings');
    }
}
