@extends('admin.layouts.panel')

@section('content')

    <div class="card grey lighten-4">
        <div class="card-content">
            <div class="input-field">
                <input type="text" name="hotel" placeholder="Поиск (по городу или улице)" class="live-search-input"  autocomplete="off">
                <input type="hidden" class="live-search_params" db_table="hotels" db_column="city" item_type="link">
                <ul class="search-result collection"></ul>
            </div>
        </div>
    </div>

    @can('admin')
        <div class="center-align">
            <a href="{{ route('hotels.create') }}" class="waves-effect waves-light btn"><i class="material-icons left">add</i>Добавить новый отель</a>
        </div>
    @endcan

    @foreach($hotels as $hotel)
        <div class="card hoverable">
            <div class="card-stacked">
                <div class="card-content">
                    <p>Город: {{ $hotel->city }}</p>
                    <p>Адрес: {{ $hotel->address }}</p>
                    <p>Владелец: {{ $hotel->user->name }}</p>
                </div>
                <div class="card-action">
                    <a href="{{ route('hotels.show', $hotel->id) }}">профиль отеля</a>
                    <a href="{{ route('hotels.destroy', [$hotel->id]) }}" data-method="delete" data-token="{{csrf_token()}}" data-confirm="Уверены, что хотите удалить отель?">удалить</a>
                </div>
            </div>
        </div>
    @endforeach
@endsection