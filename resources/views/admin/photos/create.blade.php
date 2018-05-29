@extends('admin.layouts.panel')

@section('content')

    <form action="{{ route('photos.store') }}" enctype="multipart/form-data" method="post">


        <div class="file-field input-field">
            <div class="btn">
                <span>Файл</span>
                <input type="file" name="photos[]" multiple="multiple">
            </div>
            <div class="file-path-wrapper">
                <input class="file-path validate" type="text">
            </div>
        </div>

        <div class="input-field">
            <input id="title" type="text" class="validate" name="title">
            <label for="alt">Title</label>
        </div>

        <div class="input-field">
            <input id="alt" type="text" class="validate" name="alt">
            <label for="alt">Alt</label>
        </div>

        <div class="input-field">
            <input id="descr" type="text" class="validate" name="descr">
            <label for="descr">Описание (необязательно)</label>
        </div>

        <button class="btn waves-effect waves-light" type="submit">Готово
            <i class="material-icons right">send</i>
        </button>
        {{ csrf_field() }}

    </form>

@endsection