@extends('admin.layouts.panel')

@section('content')
    <form action="{{ route('hotels.update', $hotel->id) }}" method="post">

        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach

        <div class="input-field">
            <input type="text" name="country" placeholder="Страна (например, Россия)" class="live-search-input"  autocomplete="off" value="{{ $hotel->country }}">
            <input type="hidden">
            <ul class="search-result collection"></ul>
        </div>

        <div class="input-field">
            <input type="text" id="city" name="city" placeholder="например, Санкт-Петербург" class="live-search-input"  autocomplete="off" value="{{ $hotel->city }}">
            <label for="city">Город</label>
            <input type="hidden" class="live-search_params" db_table="city" db_column="name" item_type="select">
            <ul class="search-result collection"></ul>
        </div>

        <ul class="search-result collection"></ul>
        <div class="input-field">
            <input type="text" id="address" name="address" placeholder="напрмиер, ул. Ленина, 29а" autocomplete="off" value="{{ $hotel->address }}">
            <label for="address">Адрес</label>
        </div>

        <div class="input-field">
            <input type="text" id="phone" name="phone" placeholder="телефон" autocomplete="off" value="{{ $hotel->phone }}">
            <label for="phone">Телефон</label>
        </div>

        <div class="input-field">
            <input type="text" id="email" name="email" placeholder="email" autocomplete="off" value="{{ $hotel->email }}">
            <label for="email">Email</label>
        </div>

        <div class="input-field">
            <input type="text" id="link_vk" name="link_vk" placeholder="ссылка на ВКонтакте" autocomplete="off" value="{{ $hotel->link_vk }}">
            <label for="link_vk">ВКонтакте</label>
        </div>

        <div class="input-field">
            <input type="text" id="link_fb" name="link_fb" placeholder="ссылка на FaceBook" autocomplete="off" value="{{ $hotel->link_fb }}">
            <label for="link_fb">FaceBook</label>
        </div>

        <div class="input-field">
            <input type="text" id="link_inst" name="link_inst" placeholder="ссылка на Instagram" autocomplete="off" value="{{ $hotel->link_inst }}">
            <label for="link_inst">Instagram</label>
        </div>

        <input type="hidden" name="_method" value="PATCH">
        {{ csrf_field() }}

        <button class="btn waves-effect waves-light" type="submit">Готово
            <i class="material-icons right">send</i>
        </button>

    </form>
@endsection