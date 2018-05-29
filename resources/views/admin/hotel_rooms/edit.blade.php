@extends('admin.layouts.panel')

@section('content')

    <div class="row">
        <div class="col s12">

            <div class="card">
                <div class="card-content">
                    <p>ВНИМАНИЕ!</p>
                    <p>Необходимый размер фото для корректного отображения на странице отеля:</p>
                    <p>Ширина: 360 px</p>
                    <p>Высота: 250 px</p>
                </div>
            </div>

        </div>
    </div>

    <div class="row">
        <div class="col s12">

            <form action="{{ route('hotels.rooms.update', [$hotel->id, $room->id]) }}" method="post" enctype="multipart/form-data">

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
                    <input placeholder="Название" id="name" type="text" class="validate" name="name" value="{{ $room->name }}">
                    <label for="name">Название</label>
                </div>

                <div class="input-field col s12">
                    <input placeholder="Стоимость" id="name" type="number" class="validate" name="price" value="{{ $room->price }}">
                    <label for="name">Стоимость</label>
                </div>

                <div class="input-field col s12">
                    <input placeholder="Описание" id="name" type="text" class="validate" name="descr" value="{{ $room->descr }}">
                    <label for="name">Описание (необязательно)</label>
                </div>

                {{ method_field('PATCH') }}
                {{ csrf_field() }}

                <button class="btn waves-effect waves-light" type="submit">Готово
                    <i class="material-icons right">send</i>
                </button>

            </form>

        </div>
    </div>

@endsection