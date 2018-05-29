@extends('admin.layouts.panel')

@section('content')

    <a href="{{ route('hotels.rooms.create', $hotel->id) }}">добавить комнату</a>

    <div class="row">
        <div class="col s12">

            @foreach($rooms as $room)
                <p>{{ $room->name }}</p>
            @endforeach


        </div>
    </div>

@endsection