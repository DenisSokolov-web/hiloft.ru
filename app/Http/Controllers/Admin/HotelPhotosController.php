<?php

namespace App\Http\Controllers\Admin;

use App\City;
use App\Hotel;
use App\HotelPhoto;
use App\HotelPhotoType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Controllers\BaseController;
use Img;

class HotelPhotosController extends BaseController
{
    public function __construct()
    {
        //$this->middleware('hoteler');

        $this->template = 'admin.hotel_photos.';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $this->template .= 'index';

        $hotel = Hotel::find($id);
        $this->vars = array_add($this->vars, 'hotel', $hotel);

        $photos = $hotel->photos;
        $this->vars = array_add($this->vars, 'photos', $photos);

        return $this->renderOutput();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($hotel_id, $type_id)
    {
        $this->template .= 'create';

        $hotel = Hotel::find($hotel_id);
        $this->vars = array_add($this->vars, 'hotel', $hotel);

        $photo_type = HotelPhotoType::find($type_id);
        $this->vars = array_add($this->vars, 'photo_type', $photo_type);

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
        /*foreach ($request->photos as $photo)
        {
            if ($photo->extension() !== 'jpeg')
            {
                dd($photo->extension());
            }
        }

        $photo = $request->except('_token');

        $type = HotelPhotoType::where('name', $photo['type_name'])->first();
        $photo['type_id'] = $type->id;

        if($photo['type_name'] == 'main')
        {
            unset($photo['type_name']);
            $file = $photo['photos'][0];
            unset($photo['photos']);
            $photo['img'] = $file->getClientOriginalName();

            $required_width = $type->width;
            $required_height = $type->height;
            list($current_width, $current_height) = getimagesize($file);

            if($required_width != $current_width || $required_height != $current_height)
            {
                if($required_width > $current_width || $required_height > $current_height)
                {
                    dd('выбранное изобржение меньше нужных размеров');
                } else {
                    $photo['optimized'] = false;
                }
            } else {
                $photo['optimized'] = true;
            }

            $type->photos()->create($photo);
        } else {
            unset($photo['type_name']);
            $file = $photo['photos'][0];
            unset($photo['photos']);
            $photo['img'] = $file->getClientOriginalName();

            $required_width = $type->width;
            $required_height = $type->height;
            list($current_width, $current_height) = getimagesize($file);

            if($required_width != $current_width || $required_height != $current_height)
            {
                if($required_width > $current_width || $required_height > $current_height)
                {
                    dd('выбранное изобржение меньше нужных размеров');
                } else {
                    $photo['optimized'] = false;
                }
            } else {
                $photo['optimized'] = true;
            };
        }*/

        //dd($photo);

        //$type->photos()->create($photo);

        $hotel = Hotel::find($request->hotel_id);

        $photo_type = HotelPhotoType::find($request->type_id);

        /*foreach ($data['photos'] as $photo)
        {
            if($photo->extension() == 'jpeg')
            {
                $arr['img'] = $photo->getClientOriginalName();
                $arr['hotel_id'] = $data['hotel_id'];
                $arr['optimized'] = false;
                $hotel->photos()->create($arr);

                $photo->move('public/img/photo', $arr['img']);
            }
        }*/

        $array = $request->except('photos');

        $file = $request->photos;
        $array['img'] = $hotel->slug . '_' . $photo_type->name . '.jpg';

        $file->move(env('DIR_IMG') . 'photo/', $array['img']);

        $delete = $hotel->photos()->where('type_id', $request->type_id)->delete();
        //dd($delete);

        $hotel->photos()->create($array);
        
        return redirect(route('hotels.show', $hotel->id));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($hotel_id, $photo_id)
    {
        //$this->template .= 'edit';
        $this->template .= 'edit';

        $hotel = Hotel::find($hotel_id);
        $this->vars = array_add($this->vars, 'hotel', $hotel);

        $photo = HotelPhoto::find($photo_id);
        $this->vars = array_add($this->vars, 'photo', $photo);

        $photo_types = HotelPhotoType::all();
        $this->vars = array_add($this->vars, 'photo_types', $photo_types);

        return $this->renderOutput();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $hotel_id, $photo_id)
    {
        $photo = HotelPhoto::find($photo_id);

        $src = (public_path(env('APP_PHOTO_DIR') . $photo->img));

        /*Img::resize(
            $photo->img, $src,
            0, 0,
            (int)$request->input('sx'), (int)$request->input('sy'),
            (int)$request->input('dw'), (int)$request->input('dh')
        );

        $arr = $request->except(['sx', 'sy', 'dw', 'dh']);

        $photo->update($arr);*/

        /*if($request->photos)
        {
            $file = $request->photos;
            $arr['img'] = $file->getClientOriginalName();
            $file->move('public/img/photo/', $arr['img']);

            $photo->update($arr);
        } else {
            $photo->update($request->except(['sx', 'sy', 'dw', 'dh']));
        }*/

        $photo->update($request->except(['sx', 'sy', 'dw', 'dh']));

        return redirect(route('hotels.show', [$hotel_id]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hotel $hotel, $photo_id)
    {
        $photo = HotelPhoto::find($photo_id);
        //$file_path = public_path("img\photo") . '\\' . $photo->img;
        $file_path = 'public/img/photo' . '/' . $photo->img;
        //dd($file_path);

        if (unlink($file_path))
        {
            $photo->destroy($photo_id);

            return redirect()->route('hotels.show', $hotel->id);
        }
    }
}
