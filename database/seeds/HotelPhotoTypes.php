<?php

use Illuminate\Database\Seeder;

class HotelPhotoTypes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hotel_photo_types')->insert([
            [
                'name' => 'main',
                'width' => 1920,
                'height' => 1080,
                'descr' => 'Фотография для главного экрана страницы'
            ],
            [
                'name' => 'gallery_1',
                'width' => 360,
                'height' => 341,
                'descr' => NULL
            ],
            [
                'name' => 'gallery_2',
                'width' => 360,
                'height' => 341,
                'descr' => NULL
            ],
            [
                'name' => 'gallery_3',
                'width' => 360,
                'height' => 716,
                'descr' => NULL
            ],
            [
                'name' => 'gallery_4',
                'width' => 360,
                'height' => 341,
                'descr' => NULL
            ],
            [
                'name' => 'gallery_5',
                'width' => 360,
                'height' => 341,
                'descr' => NULL
            ],
        ]);
    }
}
