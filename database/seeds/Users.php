<?php

use Illuminate\Database\Seeder;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Denis',
                'email' => 'admin@admin.ru',
                'password' => '$2y$10$1NCtx0yy8RG5wS/5ay3M7.Rj4q4YV52GvggqHJgNLeD1EprRJ9RFK'
            ],
            [
                'name' => 'Пётр Иванов',
                'email' => 'petr.ivanov@email.ru',
                'password' => '$2y$10$1NCtx0yy8RG5wS/5ay3M7.Rj4q4YV52GvggqHJgNLeD1EprRJ9RFK'
            ],
            [
                'name' => 'Василий Никулин',
                'email' => 'vasiliy.nikulin@email.ru',
                'password' => '$2y$10$1NCtx0yy8RG5wS/5ay3M7.Rj4q4YV52GvggqHJgNLeD1EprRJ9RFK'
            ]
        ]);
    }
}
