@extends('layouts.pattern')

@section('content')
<form action="{{route('login-submit')}}" method="post" >
    @csrf
    <div class="form-group">
        <label for="login">Введите логин:</label>
        <input type="text" name="login" placeholder="Логин" id="login" class="form-control">
    </div>
    <div class="form-group">
        <label for="password">Введите пароль:</label>
        <input type="password" name="password" placeholder="Пароль" id="password" class="form-control">
    </div>
    <button type="submit" class="btn btn-success">Войти</button>
</form>
@endsection

@section('title', 'Login')
