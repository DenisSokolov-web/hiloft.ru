<?php

namespace App\Http\Controllers\Ajax;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PhotoStoreController extends Controller
{
    public function index(Request $request)
    {
        $photo = $_FILES['image'];

        $dst = public_path(env('APP_PHOTO_DIR') . $photo['name']);

        //$res = move_uploaded_file($photo['tmp_name'], asset('public/img/photo' . '/' . $photo['name']));

        if (move_uploaded_file($photo['tmp_name'], $dst))
        {
            return 'Файл успешно загружен';
        } else {
            return 'Ошибка загрузки файла';
        }

    }
}