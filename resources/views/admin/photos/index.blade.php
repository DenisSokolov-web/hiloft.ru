@extends('admin.layouts.panel')

@section('content')

    <div class="row">

        @if(count($photos) == 0)

            <div class="col s12">

                <div class="card hoverable">
                    <div class="card-content">
                        <div class="row">
                            <div class="col s12">
                                <p class="flow-text text-center">
                                    Нет ни одной фотографии
                                </p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col s12">

                                <form action="{{ route('photos.store') }}" enctype="multipart/form-data" method="post">

                                    <div class="file-field input-field">
                                        <div class="btn">
                                            <span>Выберите файл(ы)</span>
                                            <input type="file" name="photos[]" multiple="multiple">
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input class="file-path validate" type="text">
                                        </div>
                                    </div>

                                    <button class="btn waves-effect waves-light" type="submit">Загрузить
                                        <i class="material-icons right">send</i>
                                    </button>
                                    {{ csrf_field() }}

                                </form>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

        @else

            @foreach($photos as $photo)
                <div class="col s12 m6">
                    <div class="card">
                        <div class="card-image">
                            <img src="{{ asset('public/img/photo') . '/' . $photo->img }}" alt="{{ $photo->alt }}" title="{{ $photo->title }}">

                            <a class="btn-floating halfway-fab waves-effect waves-light red" href="{{ route('photos.edit', $photo->id) }}"><i class="material-icons">edit</i></a>
                            <span class="card-title">{{ $photo->title }}</span>
                        </div>
                        <div class="card-action">
                            <a href="">разместить на сайте</a>
                            <a href="{{ route('photos.destroy', $photo->id) }}" data-method="delete"
                               data-token="{{csrf_token()}}" data-confirm="Уверены, что хотите удалить фото?">удалить</a>
                        </div>
                    </div>
                </div>
            @endforeach

        @endif

    </div>

@endsection