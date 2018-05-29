@extends('admin.layouts.panel')

@section('content')

    @foreach($feedbacks as $feedback)
        <div class="card">
            <div class="card-content">
                <h4>{{ $feedback->name }}</h4>
                <p>{{ $feedback->text }}</p>
            </div>
            <div class="card-action">
                <a href="{{ route('hotels.feedbacks.edit', [$hotel->id, $feedback->id]) }}">редактировать</a>
                <a href="{{ route('hotels.feedbacks.destroy', [$hotel->id, $feedback->id]) }}" data-method="delete" data-token="{{csrf_token()}}" data-confirm="Уверены, что хотите удалить отзыв?">удалить</a>
            </div>
        </div>
    @endforeach

@endsection