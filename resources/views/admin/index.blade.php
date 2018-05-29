@extends('admin.layouts.panel')

@section('content')
    @can('view-users')
        <div class="card grey blue-grey lighten-4 hoverable">
            <div class="card-content">
                <p>Пользователи</p>
            </div>
            <div class="card-action">
                <a href="{{ route('users.create') }}" class="btn-floating btn-small waves-effect waves-light"><i class="material-icons">add</i></a>
                <a href="{{ route('users.index') }}" class="light-blue-text">список пользователей</a>
            </div>
        </div>
    @endcan

    <div class="card grey blue-grey lighten-4 hoverable">
        <div class="card-content">
            <p>Отели</p>
        </div>
        <div class="card-action">
            @can('admin')
                <a href="{{ route('hotels.create') }}" class="btn-floating btn-small waves-effect waves-light"><i class="material-icons">add</i></a>
            @endcan
            <a href="{{ route('hotels.index') }}" class="light-blue-text">список отелей</a>
        </div>
    </div>

@endsection