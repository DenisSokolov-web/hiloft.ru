<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelRoomPhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('hotel_room_photos'))
        {
            Schema::create('hotel_room_photos', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('photo_id')->unsigned();
                $table->timestamps();

                $table->foreign('photo_id')->references('id')->on('photos')->onDelete('cascade');
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
        Schema::dropIfExists('hotel_room_photos');
    }
}
