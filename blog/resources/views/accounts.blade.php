@extends('layouts.pattern')

@section('content')
<ol>
    @foreach($data as $message)
        <li>$message</li>
    @endforeach
</ol>
@endsection


@section('title', 'Welcome to main page!')
