<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('hotels'))
        {
            Schema::create('hotels', function (Blueprint $table) {
                $table->increments('id');
                $table->text('city');
                $table->text('address');
                $table->integer('hoteler_id')->unsigned();
                $table->text('slug');
                $table->text('email');
                $table->text('phone');
                $table->timestamps();

                $table->foreign('hoteler_id')->references('id')->on('users');
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
        Schema::dropIfExists('hotels');
    }
}
