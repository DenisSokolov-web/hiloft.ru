<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelPhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('hotel_photos'))
        {
            Schema::create('hotel_photos', function (Blueprint $table) {
                $table->increments('id');
                $table->text('img')->nullable();
                $table->integer('hotel_id')->unsigned();
                $table->text('title')->nullable();
                $table->text('alt')->nullable();
                $table->integer('type_id')->unsigned()->nullable();
                $table->boolean('optimized');
                $table->timestamps();

                $table->foreign('hotel_id')->references('id')->on('hotels')->onDelete('cascade');
                $table->foreign('type_id')->references('id')->on('hotel_photo_types')->onDelete('cascade');
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
        Schema::dropIfExists('hotel_photos');
    }
}
