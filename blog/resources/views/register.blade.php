@extends('layouts.pattern')

@section('content')
<form action="{{route('register-submit')}}" method="post" >
    @csrf
    <div class="form-group">
        <label for="firstname">Введите имя:</label>
        <input type="text" name="firstname" placeholder="Имя" id="name" class="form-control">
        @if($errors -> has('firstname'))
            <small class="text-danger">Обязательное поле</small>
        @endif
    </div>
    <div class="form-group">
        <label for="lastname">Введите фамилию:</label>
        <input type="text" name="lastname" placeholder="Фамилия" id="lastname" class="form-control">
        @if($errors -> has('lastname'))
            <small class="text-danger">Обязательное поле</small>
        @endif
    </div>
    <div class="form-group">
        <label for="login">Введите логин:</label>
        <input type="text" name="login" placeholder="Логин" id="login" class="form-control">
        @if($errors -> has('login'))
            <small class="text-danger">Обязательное поле</small>
        @endif
    </div>
    <div class="form-group">
        <label for="password">Введите пароль:</label>
        <input type="password" name="password" placeholder="Пароль" id="password" class="form-control">
        @if($errors -> has('password'))
            <small class="text-danger">Обязательное поле</small>
        @endif
    </div>
    <div class="form-group">
        <label for="email">Введите E-Mail:</label>
        <input type="text" name="email" placeholder="E-Mail" id="email" class="form-control">
        @if($errors -> has('email'))
            <small class="text-danger">Обязательное поле</small>
        @endif
    </div>
    <button id="submit-form" type="submit" class="btn btn-success">Зарегистрироваться</button>

</form>

@endsection

@section('title', 'Регистрация')
@section('additional-style', './css/login.css')
