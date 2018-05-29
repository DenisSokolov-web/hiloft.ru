@extends('admin.layouts.panel')

@section('content')
    <form action="{{ route('hotels.update', $hotel->id) }}" method="post">

        @can('admin')
            <div class="input-field">
                <input type="text" name="hoteler_id" placeholder="Имя отельера (например, Пётр Иванов)" class="live-search-input" autocomplete="off" value="{{ $hotel->user->id }}">
                <input type="hidden" class="live-search_params" db_table="users" db_column="name" item_type="select">
                <ul class="search-result collection"></ul>
            </div>
        @endcan

        <div class="input-field">
            <input type="text" name="coutnry" placeholder="Страна (например, Россия)" class="live-search-input"  autocomplete="off" value="{{ $hotel->country }}">
            <input type="hidden" class="live-search_params" db_table="country" db_column="name" item_type="select">
            <ul class="search-result collection"></ul>
        </div>

        <div class="input-field">
            <input type="text" name="city" placeholder="город (например, Санкт-Петербург)" class="live-search-input"  autocomplete="off" value="{{ $hotel->city }}">
            <input type="hidden" class="live-search_params" db_table="city" db_column="name" item_type="select">
            <ul class="search-result collection"></ul>
        </div>

        <ul class="search-result collection"></ul>
        <div class="input-field">
            <input type="text" name="address" placeholder="Адрес (напрмиер, ул. Ленина, 29а)" autocomplete="off" value="{{ $hotel->address }}">
        </div>

        <div class="input-field">
            <input type="text" name="phone" placeholder="Телефон (отображается на сайте)" autocomplete="off" value="{{ $hotel->phone }}">
        </div>

        <div class="input-field">
            <input type="text" name="email" placeholder="Email (отображается на сайте)" autocomplete="off" value="{{ $hotel->email }}">
        </div>

        <input type="hidden" name="_method" value="PUT">
        {{ csrf_field() }}

        <button class="btn waves-effect waves-light" type="submit">Готово
            <i class="material-icons right">send</i>
        </button>

    </form>
@endsection