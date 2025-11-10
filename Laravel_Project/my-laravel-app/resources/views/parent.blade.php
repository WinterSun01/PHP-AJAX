@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Родительская страница</h1>
        <p>Это главная страница. Перейдите в дочернюю:</p>
        <a href="{{ route('child') }}" class="btn btn-primary">Перейти к списку пользователей</a>
    </div>
@endsection