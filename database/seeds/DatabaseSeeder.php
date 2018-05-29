<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(Roles::class);
        $this->call(Users::class);
        $this->call(RolesUsers::class);
        $this->call(Hotels::class);
        $this->call(HotelPhotoTypes::class);
    }
}
