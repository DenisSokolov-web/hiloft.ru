@extends('admin.layouts.panel')

@section('content')

    <div class="row">
        <div class="col s12">
            <div class="img-crop-container">
                <div class="img-crop-container__crop"></div>
                <img src="{{ asset('public/img/photo') . '/' . $photo->img }}" alt="{{ $photo->alt }}" title="{{ $photo->title }}" class="img">
            </div>
        </div>
    </div>

    <div class="row">
        <form action="{{ route('photos.update', $photo->id) }}" method="post">

            <select name="type_id" class="select_type-id">
                <option value="" disabled selected>Тип изображения</option>
                @foreach($hotel_photo_types as $type)
                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                @endforeach
            </select>

            <input type="hidden" name="x" class="x">
            <input type="hidden" name="y" class="y">

            <input type="hidden" name="_method" value="PUT">
            {{ csrf_field() }}

            <button class="btn waves-effect waves-light" type="submit">Готово
                <i class="material-icons right">send</i>
            </button>

        </form>
    </div>

@endsection