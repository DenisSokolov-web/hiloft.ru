<?php
namespace App\Library\Helpers;

class Img
{
    public static function resize($new_img, $src_img, $dx, $dy, $sx, $sy, $dw, $dh)
    {
        $path = public_path(env('APP_PHOTO_DIR'));
        $img_name = explode('\\', $src_img);
        $img_name = array_pop($img_name);

        //list($sw, $sh) = getimagesize($src_img);
        //$ratio = getimagesize($src_img)[0] / 730;

        //dd($ratio);

        //$sx = $sx * $ratio;
        //$sy = $sy * $ratio;

        $sw = $dw;
        $sh = $dh;

        $new_img = imagecreatetruecolor($dw, $dh);
        $src_img = imagecreatefromjpeg($src_img);

        imagecopyresampled(
            $new_img, $src_img,
            $dx, $dy,
            $sx, $sy,
            $dw, $dh,
            $sw, $sh
        );

        imagejpeg(
            $new_img,
            $path . $img_name . '_resized.jpg',
            100
        );
    }
}