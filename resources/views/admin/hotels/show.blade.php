@extends('admin.layouts.panel')

@section('content')

    <div class="row">

        <div class="col s12">
            <h4>{{ $hotel->city }} - {{ $hotel->address }}</h4>
        </div>

        <div class="col s12 m6">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Контакты</span>
                    <p>ссылка на страницу: <a href="{{ asset($hotel->slug) }}">{{ asset($hotel->slug) }}</a></p>
                    <p>Страна: {{ $hotel->country }}</p>
                    <p>Город: {{ $hotel->city }}</p>
                    <p>Адрес: {{ $hotel->address }}</p>
                    <p>Телефон: {{ $hotel->phone }}</p>
                    <p>Email: {{ $hotel->email }}</p>
                    <p>Вконтакте: <a href="{{ $hotel->link_vk  }}">{{ $hotel->link_vk  }}</a></p>
                    <p>FaceBook: <a href="{{ $hotel->link_fb  }}">{{ $hotel->link_fb  }}</a></p>
                    <p>Instagram: <a href="{{ $hotel->link_inst  }}">{{ $hotel->link_inst  }}</a></p>
                </div>
                <div class="card-action">
                    <a href="{{ route('hotels.contacts.edit', $hotel->id) }}">изменить</a>
                </div>
            </div>
        </div>

        <div class="col s12 m6">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">SEO</span>
                    <p>meta keywords: {{ $hotel->meta_keywords }}</p>
                    <p>meta description: {{ $hotel->meta_description }}</p>
                </div>
                <div class="card-action">
                    <a href="{{ route('hotels.seo.edit', $hotel->id) }}">изменить</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col s12 center-align">

            <h3>Заглавное фото отеля</h3>

            <div class="card">
                @if($photos['main'])
                    <div class="card-image">
                        <img src="{{ asset(env('DIR_IMG') . 'photo/' . $photos['main']->img) }}" alt="">
                    </div>
                    <div class="card-action">
                        <a href="{{ route('hotels.photos.edit', [$hotel->id, $photos['main']->id]) }}">изменить</a>
                    </div>
                @else
                    <div class="card-content">
                        <p>нет фото</p>
                        <a class="waves-effect waves-light btn" href="{{ route('hotels.photos.create.type', [$hotel->id, $main_photo_type_id]) }}"><i class="material-icons left">add</i>загрузить</a>
                    </div>
                @endif
            </div>

        </div>

    </div>

    <div class="row">

        <div class="col s12 center-align">
            <h3>Номерной фонд</h3>
            <a class="waves-effect waves-light btn" href="{{ route('hotels.rooms.create', $hotel->id) }}"><i class="material-icons left">add</i>Добавить</a>
        </div>

        @if(count($rooms) == 0)
            <div class="col s12">
                <p>Нет ни одного номера</p>
            </div>
        @else
            @foreach($rooms as $room)
                <div class="col s12 m6">
                    <div class="card small">
                        <div class="card-image">
                            <img src="{{ asset(env('DIR_IMG') . 'rooms/' . $room->img_url) }}" alt="">
                        </div>
                        <div class="card-content">
                            <p>Название: {{ $room->name }}</p>
                            <p>Цена: {{ $room->price }}</p>
                        </div>
                        <div class="card-action">
                            <a href="{{ route('hotels.rooms.edit', [$hotel->id, $room->id]) }}">изменить</a>
                            <a href="{{ route('hotels.rooms.destroy', [$hotel->id, $room->id]) }}" data-method="delete" data-token="{{csrf_token()}}" data-confirm="Уверены, что хотите удалить номер?">удалить</a>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif

    </div>

    <div class="row">

        <div class="col s12 center-align">
            <h3>Фото для раздела галереи</h3>
        </div>

        @foreach($gallery as $item)
            @if($item instanceof \App\HotelPhoto)
                <div class="col s12 m6">
                    <div class="card">
                        <div class="card-image">
                            <img src="{{ asset(env('DIR_IMG') . 'photo/' . $item->img) }}" alt="" class="card__img_gallery">
                        </div>
                        <div class="card-action">
                            <a href="{{ route('hotels.photos.edit', [$hotel->id, $item->id]) }}">изменить</a>
                            <a href="{{ route('hotels.photos.destroy', [$hotel->id, $item->id]) }}" data-method="delete" data-token="{{csrf_token()}}" data-confirm="Уверены, что хотите удалить фото?">удалить</a>
                        </div>
                    </div>
                </div>
            @else
                <div class="col s12 m6">
                    <div class="card">
                        <div class="card-content center-align">
                            <p>Нет фото</p>
                        </div>
                        <div class="card-action center-align">
                            <a class="waves-effect waves-light btn" href="{{ route('hotels.photos.create.type', [$hotel->id, $item->id]) }}"><i class="material-icons left">add</i>Загрузить</a>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach

    </div>

    <div class="row text-center">
        <div class="col s12">

            <h3>Отзывы</h3>

            <a class="waves-effect waves-light btn" href="{{ route('hotels.feedbacks.index', $hotel->id) }}"><i class="material-icons left">chat_bubble_outline</i>смотреть отзывы</a>

        </div>
    </div>

@endsection