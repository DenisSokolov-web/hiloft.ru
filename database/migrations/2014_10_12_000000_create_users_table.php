<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('users'))
        {
            Schema::create('users', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->string('email')->unique();
                $table->string('password');
                $table->rememberToken();
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
        if(Schema::hasTable('roles__users'))
        {
            Schema::table('roles__users', function (Blueprint $table) {
                $table->dropForeign('user_id');
            });

            Schema::table('hotels', function (Blueprint $table) {
                $table->dropForeign('hoteler_id');
            });
        }

        Schema::dropIfExists('users');
    }
}
