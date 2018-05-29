@extends('admin.layouts.panel')

@section('content')

    <div class="row">

        <form action="{{ route('hotels.photos.store', $hotel->id) }}" method="post" enctype="multipart/form-data" class="form-photos">

            <img src="" alt="" class="input-img-preview img">

            <div class="file-field input-field">
                <div class="btn">
                    <span>File</span>
                    <input type="file" name="photo-main" class="input__img">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text">
                </div>
            </div>

            <div class="file-field input-field">
                <div class="btn">
                    <span>File</span>
                    <input type="file" name="photo-1" class="input__img">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text">
                </div>
            </div>

            {{ csrf_field() }}
            {{ method_field('PUT') }}

            <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                <i class="material-icons right">send</i>
            </button>

        </form>

        @foreach($photos as $photo)
            <div class="col s4">
                <div class="card">
                    <div class="card-image">
                        <img src="{{ asset('public/img/photo') . '/' . $photo->img }}" alt="">
                        <a class="btn-floating halfway-fab waves-effect waves-light red" href="{{ route('hotels.photos.edit', [$hotel->id, $photo->id]) }}"><i class="material-icons">edit</i></a>
                    </div>
                </div>
            </div>
        @endforeach
        
    </div>

@endsection