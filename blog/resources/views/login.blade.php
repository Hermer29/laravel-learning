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
    <button id="submit-form" type="submit" class="btn btn-success">Войти</button>
</form>
@if($errors->any())
<div class="errors">
    @foreach($errors -> all() as $error)
        {{$error}}<br>
    @endforeach
</div>
@endif
@endsection

@section('title', 'Login')
