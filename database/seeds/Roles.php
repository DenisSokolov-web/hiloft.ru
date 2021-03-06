<?php

use Illuminate\Database\Seeder;

class Roles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
                'name' => 'admin',
                'descr' => 'Администратор портала'
            ],
            [
                'name' => 'hoteler',
                'descr' => 'отельер, владелец отеля'
            ]
        ]);
    }
}
