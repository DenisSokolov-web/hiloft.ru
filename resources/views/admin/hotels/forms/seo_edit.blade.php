@extends('admin.layouts.panel')

@section('content')
    <form action="{{ route('hotels.update', $hotel->id) }}" method="post">

        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach

        <div class="input-field">
            @if($hotel->meta_keywords)
                <input type="text" id="keywords" name="meta_keywords" placeholder="keywords" autocomplete="off" value="{{ $hotel->meta_keywords }}">
            @else
                <input type="text" id="keywords" name="meta_keywords" placeholder="keywords" autocomplete="off" value="{{ old('meta_keywords') }}">
            @endif

            <label for="keywords">Keywords</label>
        </div>

        <div class="input-field">
            <input type="text" id="description" name="meta_description" placeholder="description" autocomplete="off" value="{{ $hotel->meta_description }}">
            <label for="description">Description</label>
        </div>

        <input type="hidden" name="_method" value="PATCH">
        {{ csrf_field() }}

        <button class="btn waves-effect waves-light" type="submit">Готово
            <i class="material-icons right">send</i>
        </button>

    </form>
@endsection