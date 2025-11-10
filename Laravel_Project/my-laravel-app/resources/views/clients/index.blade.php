@extends('layouts.app')

@section('content')
    <h1>Клиенты</h1>
    <p>Это главная страница раздела "Клиенты".</p>
    <a href="{{ route('clients.list') }}" class="btn btn-info">Список клиентов</a>
    <a href="{{ route('clients.create') }}" class="btn btn-success">Создать клиента</a>
@endsection