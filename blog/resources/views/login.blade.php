@extends('layouts.pattern')

@section('content')
<form action="{{route('login-submit')}}" method="post" >
    @csrf
    <div class="form-group">
        <label for="login">Введите логин:</label>
        <input type="text" name="login" placeholder="Логин" id="login" class="form-control">
        @if($errors -> has('login'))
            <small for="login" class="text-danger">Обязательное поле</small>
            <script src="./js/flash-error.js"></script>
        @endif
    </div>
    <div class="form-group">
        <label for="password">Введите пароль:</label>
        <input type="password" name="password" placeholder="Пароль" id="password" class="form-control">
        @if($errors -> has('password'))
            <small for="password" class="text-danger">Обязательное поле</small>
            <script src="./js/flash-error.js"></script>
        @endif
    </div>
    <button id="submit-form" type="submit" class="btn btn-success">Войти</button>
</form>
@endsection

@section('title', 'Login')
@section('additional-style', './css/login.css')
