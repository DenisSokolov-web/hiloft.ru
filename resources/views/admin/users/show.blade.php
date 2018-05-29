@extends('admin.layouts.panel')

@section('content')

    <h2>Список отелей</h2>

    @if (count($user->hotels) == null)
        нет отелей
    @endif

    <div class="row">
        <div class="col s12">
            <p>Телефон: {{ $user->phone }}</p>
            <p>Email: {{ $user->email }}</p>
        </div>
    </div>

    <div class="row">
        @foreach($user->hotels as $hotel)
            <div class="col s12 m6">
                <div class="card horizontal hoverable">
                    <div class="card-image">
                        <img src="https://lorempixel.com/100/190/nature/6">
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <p>Город: {{ $hotel->city }}</p>
                            <p>Адрес: {{ $hotel->address }}</p>
                            <p>Владелец: {{ $hotel->user->name }}</p>
                        </div>
                        <div class="card-action">
                            <a href="{{ route('hotels.show', $hotel->id) }}">профиль отеля</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection