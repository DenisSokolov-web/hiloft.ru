@extends('admin.layouts.panel')

@section('content')

    <form action="{{ route('users.update', $user->id) }}" method="post">
        <div class="input-field">
            <input id="name" type="text" class="validate" name="name" value="{{ $user->name }}">
            <label for="name">ФИО</label>
        </div>

        <div class="input-field">
            <input id="email" type="email" class="validate" name="email" value="{{ $user->email }}">
            <label for="email">Имейл (будет использоваться как логин)</label>
        </div>

        <div class="input-field">
            <input id="phone" type="text" class="validate" name="phone" value="{{ $user->phone }}">
            <label for="phone">Телефон (необязательно)</label>
        </div>

        <div class="input-field">
            <select name="role_id">
                <option value="" disabled selected>Выберите вариант: админ или отельер</option>
                @foreach($roles as $role)
                    @if($role->id == $user->roles()->first()['id'])
                        <option value="{{ $role->id }}" selected="selected">{{ $role->name }}</option>
                    @else
                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                    @endif
                @endforeach
            </select>
            <label>Уровень прав администрирования</label>
        </div>

        <button class="btn waves-effect waves-light" type="submit">Готово
            <i class="material-icons right">send</i>
        </button>

        <input type="hidden" name="_method" value="PUT">
        {{ csrf_field() }}

    </form>

@endsection