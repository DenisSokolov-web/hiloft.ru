<?php

namespace App\Http\Controllers\Admin;

use App\HotelPhotoType;
use App\Photo;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Controllers\BaseController;
use Auth;
use Img;

class PhotosController extends BaseController
{
    public function __construct()
    {
        //$this->middleware('hoteler');

        $this->template = 'admin.photos.';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->template .= 'index';

        $user = Auth::user();

        $photos = $user->photos;
        $this->vars = array_add($this->vars, 'photos', $photos);

        return $this->renderOutput();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->template .= 'create';

        return $this->renderOutput();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();

        $photos = $request->photos;

        foreach ($photos as $photo)
        {
            if($photo->extension() == 'jpeg')
            {


                $photo_name = $photo->getClientOriginalName();

                /*$path = public_path(env('APP_PHOTO_DIR'));

                list($original_width, $original_height) = getimagesize($photo);

                $new_width = 800;
                $new_height = 600;

                $new_img = imagecreatetruecolor($new_width, $new_height);
                $src_img = imagecreatefromjpeg($photo);

                //imagecopyresampled($new_img, $src_img, 0, 0, 0, 0, $new_width, $new_height, $original_width, $original_height);
                //imagejpeg($new_img, $path . $photo_name . '_resized.jpg', 100);*/

                $photo->move(public_path(env('APP_PHOTO_DIR', 'photo')), $photo->getClientOriginalName());

                $photo = new Photo();
                $photo->img = $photo_name;
                $photo->user_id = $user->id;
                $photo->alt = $request->alt;
                $photo->title = $request->title;
                $photo->descr = $request->descr;

                $photo->save();
            }
        }

        return redirect(route('photos.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->template .= 'show';

        $photo = Photo::find($id);

        return $this->renderOutput();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->template .= 'edit';

        $photo = Photo::find($id);
        $this->vars = array_add($this->vars, 'photo', $photo);

        $hotel_photo_types = HotelPhotoType::all();
        $this->vars = array_add($this->vars, 'hotel_photo_types', $hotel_photo_types);

        return $this->renderOutput();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $photo = Photo::find($id);

        $src = (public_path(env('APP_PHOTO_DIR') . $photo->img));

        Img::resize(
            $photo->img, $src,
            0, 0,
            (int)$request->input('x'), (int)$request->input('y'),
            200, 200
        );

        dd($request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $photo = Photo::find($id);

        $path = base_path('public\img\photo\\' . $photo->img);

        unlink($path);

        $photo->delete();

        return redirect(route('photos.index'));
    }
}
