<?php

use Illuminate\Database\Seeder;

class RolesUsers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles__users')->insert([
            [
                'user_id' => 1,
                'role_id' => 1
            ],
            [
                'user_id' => 2,
                'role_id' => 2
            ],
            [
                'user_id' => 3,
                'role_id' => 2
            ],
        ]);
    }
}
