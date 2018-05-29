@extends('admin.layouts.panel')

@section('content')

    <div class="row">
        <div class="col s12">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>

    <form action="{{ route('hotels.store') }}" method="post">

        <div class="input-field">
            <input type="text" name="country" placeholder="Страна (например, Россия)" class="live-search-input"  autocomplete="off" value="{{ old('country') }}">
            <input type="hidden">
            <ul class="search-result collection"></ul>
        </div>

        <div class="input-field">
            <input type="text" name="hoteler_id" placeholder="Имя отельера (например, Пётр Иванов)" class="live-search-input" autocomplete="off" value="{{ old('hoteler_id') }}">
            <input type="hidden" class="live-search_params" db_table="users" db_column="name" item_type="select">
            <ul class="search-result collection"></ul>
        </div>

        <div class="input-field">
            <input type="text" name="city" placeholder="город (например, Санкт-Петербург)" class="live-search-input"  autocomplete="off" value="{{ old('city') }}">
            <input type="hidden" class="live-search_params" db_table="city" db_column="name" item_type="select">
            <ul class="search-result collection"></ul>
        </div>

        <ul class="search-result collection"></ul>
        <div class="input-field">
            <input type="text" name="address" placeholder="Адрес (напрмиер, ул. Ленина, 29а)" autocomplete="off" value="{{ old('address') }}">
        </div>

        {{ csrf_field() }}

        <button class="btn waves-effect waves-light" type="submit">Готово
            <i class="material-icons right">send</i>
        </button>

    </form>
@endsection