@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>История взаимодействий</h1>
            <p class="lead">Полная хронология звонков, писем, встреч и задач.</p>
        </div>
    </div>

    <!-- Кнопки быстрого доступа -->
    <div class="row g-3 mt-3">
        <div class="col-md-4">
            <a href="{{ route('history.calls') }}" class="text-decoration-none">
                <div class="card border-primary text-center h-100 p-4 shadow-sm">
                    <i class="bi bi-telephone-fill text-primary" style="font-size: 2.5rem;"></i>
                    <h5 class="mt-3">Звонки</h5>
                    <p class="text-muted">42 за неделю</p>
                </div>
            </a>
        </div>

        <div class="col-md-4">
            <a href="{{ route('history.email') }}" class="text-decoration-none">
                <div class="card border-success text-center h-100 p-4 shadow-sm">
                    <i class="bi bi-envelope-fill text-success" style="font-size: 2.5rem;"></i>
                    <h5 class="mt-3">Email</h5>
                    <p class="text-muted">89 отправлено</p>
                </div>
            </a>
        </div>

        <div class="col-md-4">
            <div class="card border-warning text-center h-100 p-4 shadow-sm">
                <i class="bi bi-calendar-check text-warning" style="font-size: 2.5rem;"></i>
                <h5 class="mt-3">Встречи</h5>
                <p class="text-muted">В разработке</p>
            </div>
        </div>
    </div>

    <hr class="my-5">

    <!-- Статистика -->
    <div class="row text-center">
        <div class="col-md-3">
            <h3 class="text-primary">127</h3>
            <p>Всего событий</p>
        </div>
        <div class="col-md-3">
            <h3 class="text-success">98</h3>
            <p>Успешные</p>
        </div>
        <div class="col-md-3">
            <h3 class="text-warning">15</h3>
            <p>В обработке</p>
        </div>
        <div class="col-md-3">
            <h3 class="text-danger">14</h3>
            <p>Пропущенные</p>
        </div>
    </div>
@endsection