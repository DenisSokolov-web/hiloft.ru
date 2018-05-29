@extends('admin.layouts.panel')

@section('content')

    <div class="center-align">
        <a href="{{ route('users.create') }}" class="waves-effect waves-light btn"><i class="material-icons left">add</i>Добавить нового пользователя</a>
    </div>

    <div class="card grey lighten-4">
        <div class="card-content">
            <div class="input-field">
                <input type="text" name="city" placeholder="Поиск (по имени или email)" class="live-search-input"  autocomplete="off">
                <input type="hidden" class="live-search_params" db_table="users" db_column="name email" item_type="link">
                <ul class="search-result collection"></ul>
            </div>
        </div>
    </div>

    <div class="row">
        @foreach($users as $user)
            <div class="col s12 m6">
                <div class="card grey blue-grey lighten-4 hoverable">
                    <div class="card-content">
                        <p>{{ $user->name }}</p>
                        @foreach($user->roles as $role)
                            <p>[{{ $role->name }}]</p>
                        @endforeach
                    </div>
                    <div class="card-action">
                        <a href="{{ route('users.show', $user->id) }}">профиль</a>
                        <a href="{{ route('users.edit', $user->id) }}">изменить</a>
                        @if($user->id != Auth::user()->id)
                            <a href="{{ route('users.destroy', $user->id) }}" data-method="delete" data-token="{{csrf_token()}}" data-confirm="Уверены, что хотите удалить пользователя {{ $user->name }}?">удалить</a>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection