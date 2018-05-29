@extends('admin.layouts.panel')

@section('content')

    <div class="row">
        <div class="col s12">
            <h3>Загрузить другое фото</h3>

            <div class="card">
                <div class="card-content">

                </div>
            </div>

        </div>
    </div>

    <div class="row">
        <div class="col s12">

            <h3>Отредактровать текущее</h3>

            <div class="card">
                <div class="card-image">
                    <div class="img-crop-container">
                        <img src="{{ asset('public/img/photo') . '/' . $photo->img }}" alt="{{ $photo->alt }}" title="{{ $photo->title }}" class="img">
                    </div>
                </div>
                <div class="card-content">
                    <span class="card-title">{{ $photo->title }}</span>
                    <p>С помощью прямоугольника выберите часть изображения для подстройки фотографии под макет страницы</p>
                </div>
            </div>

            <div class="card">
                <div class="card-content">
                    <form action="{{ route('hotels.photos.update', [$hotel->id, $photo->id]) }}" method="post">

                        <div class="input-field col s12">
                            <input id="title" type="text" class="validate" name="title" value="{{ $photo->title }}">
                            <label for="title">Заголовок (отображается при наведении курсора и помогает в SEO)</label>
                        </div>

                        <div class="input-field col s12">
                            <input id="alt" type="text" class="validate" name="alt" value="{{ $photo->alt }}">
                            <label for="alt">Alt (выводится при недоступности изображения)</label>
                        </div>

                        <div class="input-field col s12">
                            <select name="type_id" class="select_type-id">

                                <option value="" disabled selected>Выберите вариант</option>

                                @foreach($photo_types as $type)

                                    @if($photo->type_id == $type->id)
                                        <option value="{{ $type->id }}" selected="selected">{{ $type->name }}</option>
                                    @else
                                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                                    @endif

                                @endforeach

                                <option value="NULL">без привязки к макету</option>

                            </select>
                            <label>Тип изображения</label>
                        </div>

                        <input type="hidden" name="sx" class="input_sx">
                        <input type="hidden" name="sy" class="input_sy">
                        <input type="hidden" name="dw" class="input_dw">
                        <input type="hidden" name="dh" class="input_dh">

                        {{ method_field('PATCH') }}
                        {{ csrf_field() }}

                        <button class="btn waves-effect waves-light" type="submit">Готово
                            <i class="material-icons right">send</i>
                        </button>

                    </form>
                </div>
            </div>

        </div>
    </div>

    <div class="row">
        <div class="col s12">

        </div>
    </div>

@endsection