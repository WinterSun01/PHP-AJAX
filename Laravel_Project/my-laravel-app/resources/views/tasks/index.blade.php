@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Задачи</h1>
            <p class="lead">Управление задачами, дедлайнами и приоритетами.</p>
        </div>
    </div>

    <!-- Кнопки создания -->
    <div class="d-flex gap-2 mb-4">
        <button class="btn btn-success" onclick="alert('Создание задачи — в разработке')">
            Создать задачу
        </button>
        <button class="btn btn-outline-primary" onclick="alert('Фильтры в разработке')">
            Фильтры
        </button>
    </div>

    <!-- Задачи: карточки -->
    <div class="row g-4">
        <!-- Задача 1: Высокий приоритет -->
        <div class="col-md-6 col-lg-4">
            <div class="card border-danger shadow-sm h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start mb-2">
                        <h5 class="card-title mb-0">Срочно: Счёт №12345</h5>
                        <span class="badge bg-danger">Срочно</span>
                    </div>
                    <p class="card-text text-muted">
                        <small>Дедлайн: <strong>10.11.2025</strong></small>
                    </p>
                    <p class="card-text">Выставить счёт клиенту "Строительство". Сумма: 125 000 ₽</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <small class="text-muted">Исполнитель: Иванов И.</small>
                        <button class="btn btn-sm btn-outline-primary">Взять</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Задача 2: Средний приоритет -->
        <div class="col-md-6 col-lg-4">
            <div class="card border-warning shadow-sm h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start mb-2">
                        <h5 class="card-title mb-0">Подготовить отчёт</h5>
                        <span class="badge bg-warning text-dark">Средний</span>
                    </div>
                    <p class="card-text text-muted">
                        <small>Дедлайн: <strong>12.11.2025</strong></small>
                    </p>
                    <p class="card-text">Собрать данные по продажам за октябрь.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <small class="text-muted">Исполнитель: Петрова Е.</small>
                        <button class="btn btn-sm btn-outline-success">Выполнено</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Задача 3: Низкий приоритет -->
        <div class="col-md-6 col-lg-4">
            <div class="card border-success shadow-sm h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start mb-2">
                        <h5 class="card-title mb-0">Обновить прайс</h5>
                        <span class="badge bg-success">Низкий</span>
                    </div>
                    <p class="card-text text-muted">
                        <small>Дедлайн: <strong>15.11.2025</strong></small>
                    </p>
                    <p class="card-text">Добавить новые позиции в прайс-лист.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <small class="text-muted">Исполнитель: —</small>
                        <button class="btn btn-sm btn-outline-primary">Взять</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr class="my-5">

    <!-- Статистика -->
    <div class="row text-center">
        <div class="col-md-3">
            <h3 class="text-danger">8</h3>
            <p>Срочно</p>
        </div>
        <div class="col-md-3">
            <h3 class="text-warning">15</h3>
            <p>В работе</p>
        </div>
        <div class="col-md-3">
            <h3 class="text-success">42</h3>
            <p>Выполнено</p>
        </div>
        <div class="col-md-3">
            <h3 class="text-primary">65</h3>
            <p>Всего</p>
        </div>
    </div>
@endsection