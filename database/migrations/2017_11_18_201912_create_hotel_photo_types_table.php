<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelPhotoTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('hotel_photo_types'))
        {
            Schema::create('hotel_photo_types', function (Blueprint $table) {
                $table->increments('id');
                $table->text('name');
                $table->integer('width');
                $table->integer('height');
                $table->text('descr')->nullable();
                $table->timestamps();
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
        Schema::dropIfExists('hotel_photo_types');
    }
}
