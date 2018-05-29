@extends('admin.layouts.panel')

@section('content')

    <div class="row">
        <div class="col s12">

            <form action="{{ route('hotels.feedbacks.update', [$hotel->id, $feedback->id]) }}" method="post">

                <div class="input-field col s12">
                    <input id="name" type="text" class="validate" name="name" value="{{ $feedback->name }}">
                    <label for="name">Автор отзыва</label>
                </div>

                <div class="input-field col s12">
                    <textarea id="textarea1" class="materialize-textarea" name="text">{{ $feedback->text }}</textarea>
                    <label for="textarea1">Текст отзыва</label>
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