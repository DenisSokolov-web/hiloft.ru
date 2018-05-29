@extends('admin.layouts.panel')

@section('content')

    <div class="row">
        <div class="col s12">

            <form action="{{ route('hotels.rooms.store', $hotel->id) }}" method="post" enctype="multipart/form-data">

                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach

                <div class="file-field input-field">
                    <div class="btn">
                        <span>Выберите файл для фото</span>
                        <input type="file" name="photos">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text">
                    </div>
                </div>

                <div class="input-field col s12">
                    <input placeholder="Название" id="name" type="text" class="validate" name="name" value="{{ old('name') }}">
                    <label for="name">Название</label>
                </div>

                <div class="input-field col s12">
                    <input placeholder="Стоимость" id="name" type="number" class="validate" name="price" value="{{ old('price') }}">
                    <label for="name">Стоимость</label>
                </div>

                <div class="input-field col s12">
                    <input placeholder="Описание" id="name" type="text" class="validate" name="descr" value="{{ old('descr') }}">
                    <label for="name">Описание (необязательно)</label>
                </div>

                {{ csrf_field() }}

                <button class="btn waves-effect waves-light" type="submit">Готово
                    <i class="material-icons right">send</i>
                </button>

            </form>

        </div>
    </div>

@endsection