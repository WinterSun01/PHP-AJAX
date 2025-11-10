@extends('layouts.app')

@section('content')
    <h1>История email</h1>
    <p>Отправленные и полученные письма.</p>

    <div class="d-flex justify-content-between mb-3">
        <a href="{{ route('history.index') }}" class="btn btn-secondary">
            Назад
        </a>
        <button class="btn btn-primary" onclick="alert('Поиск в разработке')">
            Поиск
        </button>
    </div>

    <div class="list-group">
        <a href="#" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
                <h6 class="mb-1">Предложение по поставке</h6>
                <small class="text-muted">09.11.2025 15:20</small>
            </div>
            <p class="mb-1">Уважаемый Иван Иванович, отправляем коммерческое предложение...</p>
            <small class="text-success">Отправлено → ivan@company.ru</small>
        </a>

        <a href="#" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
                <h6 class="mb-1">Re: Счёт №12345</h6>
                <small class="text-muted">09.11.2025 10:05</small>
            </div>
            <p class="mb-1">Добрый день! Счёт оплачен, ждём отгрузку.</p>
            <small class="text-primary">Получено ← petr@client.ru</small>
        </a>

        <a href="#" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
                <h6 class="mb-1">Напоминание: встреча завтра</h6>
                <small class="text-muted">08.11.2025 18:30</small>
            </div>
            <p class="mb-1">Не забудьте про встречу с клиентом в 11:00.</p>
            <small class="text-success">Отправлено → team@company.ru</small>
        </a>
    </div>
@endsection