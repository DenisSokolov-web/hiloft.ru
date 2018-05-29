@extends('admin.layouts.panel')

@section('content')

    <div class="row">
        <div class="col s12">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>

    <form action="{{ route('users.store') }}" method="post">

        <div class="input-field">
            <input id="name" type="text" class="validate" name="name" value="{{ old('name') }}">
            <label for="name">ФИО</label>
        </div>

        <div class="input-field">
            <input id="email" type="email" class="validate" name="email" value="{{ old('email') }}">
            <label for="email">Имейл (будет использоваться как логин)</label>
        </div>

        <div class="input-field">
            <input id="phone" type="text" class="validate" name="phone" value="{{ old('phone') }}">
            <label for="phone">Телефон (необязательно)</label>
        </div>

        <div class="input-field">
            <input id="password" type="password" class="validate" name="password">
            <label for="password">Пароль</label>
        </div>

        <div class="input-field col s12">
            <select name="role_id">
                @foreach($roles as $role)
                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                @endforeach
            </select>
            <label>Уровень прав администрирования</label>
        </div>

        <button class="btn waves-effect waves-light" type="submit">Готово
            <i class="material-icons right">send</i>
        </button>

        {{ csrf_field() }}

    </form>

@endsection