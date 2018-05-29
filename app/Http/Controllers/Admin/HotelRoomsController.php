<?php

namespace App\Http\Controllers\Admin;

use App\Hotel;
use App\HotelRoom;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\BaseController;

class HotelRoomsController extends BaseController
{
    public function __construct()
    {
        $this->template = 'admin.hotel_rooms.';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($hotel_id)
    {
        $this->template .= 'index';

        $hotel = Hotel::find($hotel_id);
        $this->vars = array_add($this->vars, 'hotel', $hotel);

        $rooms = $hotel->rooms;
        $this->vars = array_add($this->vars, 'rooms', $rooms);

        return $this->renderOutput();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($hotel_id)
    {
        $this->template .= 'create';

        $hotel = Hotel::find($hotel_id);
        $this->vars = array_add($this->vars, 'hotel', $hotel);

        return $this->renderOutput();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $hotel_id)
    {
        $request->validate([
            'photos' => 'bail|required|file|image|mimes:jpg,jpeg|max:3072',
            'name' => 'required',
            'price' => 'bail|required|digits_between:3,5'
        ], [
            'photos.required' => 'Файл "Фото" не выбран'
        ]);

        $data = $request->except('photos');

        $hotel = Hotel::find($hotel_id);
        $room = $hotel->rooms()->create($data);

        $file = $request->photos;

        $file_name = $hotel->slug . '_room_' . $room->id . '.jpg';

        $file->move(env('DIR_IMG') . 'rooms/', $file_name);

        $room->update(['img_url'=>$file_name]);

        return redirect(route('hotels.show', $hotel_id));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\HotelRoom  $hotelRoom
     * @return \Illuminate\Http\Response
     */
    public function show(HotelRoom $hotelRoom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\HotelRoom  $hotelRoom
     * @return \Illuminate\Http\Response
     */
    public function edit(Hotel $hotel, HotelRoom $room)
    {
        $this->template .= 'edit';

        $this->vars = array_add($this->vars, 'hotel', $hotel);
        $this->vars = array_add($this->vars, 'room', $room);

        return $this->renderOutput();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\HotelRoom  $hotelRoom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hotel $hotel, HotelRoom $room)
    {
        $data = $request->except(['_method', '_token', 'photos']);


        $file = $request->photos;

        if ($file)
        {
            $file_name = $hotel->slug . '_room_' . $room->id . '.jpg';

            $file->move(env('DIR_IMG') . 'rooms/', $file_name);

            $data['img_url'] = $file_name;
        }


        $room->update($data);

        return redirect(route('hotels.show', $hotel->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\HotelRoom  $hotelRoom
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hotel $hotel, HotelRoom $room)
    {
        $file_path = 'public/img/rooms/' . '/' . $room->img_url;

        if (unlink($file_path))
        {
            $room->destroy($room->id);

            return redirect()->route('hotels.show', $hotel->id);
        }

    }
}
