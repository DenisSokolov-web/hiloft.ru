<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('hotel_rooms'))
        {
            Schema::create('hotel_rooms', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('hotel_id')->unsigned();
                $table->text('name');
                $table->integer('price');
                $table->text('descr')->nullable();
                $table->timestamps();

                $table->foreign('hotel_id')->references('id')->on('hotels')->onDelete('cascade');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotel_rooms');
    }
}
