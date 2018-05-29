<?php

namespace App\Http\Controllers\Admin;

use App\City;
use App\Hotel;
use App\HotelPhoto;
use App\HotelPhotoType;
use App\HotelRoom;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;

use Auth;

class HotelsController extends BaseController
{
    public function __construct()
    {
        $this->middleware('admin', ['except' => ['index', 'show', 'edit', 'update']]);
        $this->template = 'admin.hotels.';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->template .= 'index';
        $this->page_title = 'Список всех отелей';

        $user = Auth::user();


        if ($user->can('admin'))
        {
            $hotels = Hotel::all();
        } else {
            $hotels = $user->hotels;
            // Если у пользователя лишь один отель, сразу делаем redirect на профиль отеля
            if(count($hotels) == 1)
            {
                $hotel = $hotels->first();
                return redirect(route('hotels.show', $hotel->id));
            }
        }
        $this->vars = array_add($this->vars, 'hotels', $hotels);

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
        $this->page_title = 'Добавление нового отеля';

        $cities = City::all();
        $this->vars = array_add($this->vars, 'cities', $cities);

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
        $request->validate(
            [
                'city' => 'bail|required|string',
                'hoteler_id' => 'required',
                'address' => 'bail|required|string'
            ]
        );

        $hotel = $request->all();

        $user = User::where('name', $request->hoteler_id)->first();
        $hotel['hoteler_id'] = $user->id;

        $address_start = mb_substr($hotel['address'], 0, 2);
        /*if ($address_start == 'ул' ||  $address_start == 'Ул' || $address_start == 'ул.' || $address_start == 'Ул.' || $address_start == 'ул')
        {
            $hotel['address'] = str_replace($address_start, '', $hotel['address']);
            $hotel['address'] = trim($hotel['address']);
        }*/

        $hotel['slug'] = str_slug($hotel['address'], '_');
        $hotel = array_except($hotel, 'hoteler');

        //dd($hotel);

        Hotel::create($hotel);

        return redirect(route('hotels.index'));
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
        $this->id = $id;

        // Модель текущего отеля
        $hotel = Hotel::find($id);
        $this->vars = array_add($this->vars, 'hotel', $hotel);

        // Коллекция моделей номеров текущего отеля
        $rooms = $hotel->rooms;
        $this->vars = array_add($this->vars, 'rooms', $rooms);

        // Главная фотография
        $type_id = HotelPhotoType::where('name', 'main')->first()->id;

        $main_photo_type_id = $type_id;
        $this->vars = array_add($this->vars, 'main_photo_type_id', $main_photo_type_id);

        $photos['main'] = HotelPhoto::
            where([
                ['hotel_id', $id],
                ['type_id', $type_id]
            ])
            ->first();

        // Фотографии для галереи
        $photos['gallery'] = HotelPhoto::
            where([
                ['hotel_id', $id],
                ['type_id', '!=', $type_id]
            ])
            ->get();

        $this->vars = array_add($this->vars, 'photos', $photos);

        // Список всех типов фотографий (кроме 'main')
        $types_of_photos = HotelPhotoType::where('name', '!=', 'main')->get();
        $this->vars = array_add($this->vars, 'types_of_photos', $types_of_photos);

        // Список изображений этого отеля по каждому типу
        $photos_of_types = HotelPhotoType::where('name', '!=', 'main')->with(['photos' => function ($query) {
            $query->where('hotel_id', $this->id);
        }])->get();

        $gallery = collect();
        foreach ($photos_of_types as $type)
        {
            if($type->photos->first())
            {
                $gallery = $gallery->concat([$type->photos->first()]);
            } else {
                $gallery = $gallery->concat([$type]);
            }
        }
        $this->vars = array_add($this->vars, 'gallery', $gallery);

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

        $hotel = Hotel::find($id);
        $this->vars = array_add($this->vars, 'hotel', $hotel);

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
        if ($request->address)
        {
            $request->validate([
                'country' => 'bail|required|string',
                'city' => 'bail|required|string',
                'address' => 'bail|required|string',
                'email' => 'nullable|email',
            ]);
        } else {
            $request->validate([
                'meta_keywords' => 'nullable|string',
                'meta_description' => 'nullable|string|max:140',
            ]);
        }

        $data = $request->all();
        $data['slug'] = str_slug($request->address);

        $hotel = Hotel::find($id);

        $hotel->update($data);

        return redirect(route('hotels.show', $id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hotel $hotel)
    {
        $hotel->destroy($hotel->id);

        return redirect()->back();
    }
}
