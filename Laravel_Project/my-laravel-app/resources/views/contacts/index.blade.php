@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Контакты</h1>
            <p class="lead">Управление контактами клиентов, поставщиков и партнёров.</p>
        </div>
    </div>

    <div class="row g-4 mt-3">
        <!-- Карточка: Список -->
        <div class="col-md-4">
            <div class="card h-100 text-center border-primary">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title text-primary">
                        <i class="bi bi-list-ul"></i> Список контактов
                    </h5>
                    <p class="card-text">Просмотр и поиск всех контактов.</p>
                    <a href="{{ route('contacts.list') }}" class="btn btn-primary mt-auto">
                        Перейти в список
                    </a>
                </div>
            </div>
        </div>

        <!-- Карточка: Создать -->
        <div class="col-md-4">
            <div class="card h-100 text-center border-success">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title text-success">
                        <i class="bi bi-person-plus"></i> Добавить контакт
                    </h5>
                    <p class="card-text">Создать новый контакт.</p>
                    <a href="{{ route('contacts.create') }}" class="btn btn-success mt-auto">
                        Создать контакт
                    </a>
                </div>
            </div>
        </div>

        <!-- Карточка: Импорт -->
        <div class="col-md-4">
            <div class="card h-100 text-center border-info">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title text-info">
                        <i class="bi bi-cloud-upload"></i> Импорт
                    </h5>
                    <p class="card-text">Загрузить контакты</p>
                    <a href="#" class="btn btn-info mt-auto" onclick="alert('Импорт в разработке')">
                        Импортировать
                    </a>
                </div>
            </div>
        </div>
    </div>

    <hr class="my-5">

    <div class="row text-center">
        <div class="col-md-3">
            <h3 class="text-primary">127</h3>
            <p>Всего контактов</p>
        </div>
        <div class="col-md-3">
            <h3 class="text-success">89</h3>
            <p>Активные</p>
        </div>
        <div class="col-md-3">
            <h3 class="text-warning">12</h3>
            <p>На модерации</p>
        </div>
        <div class="col-md-3">
            <h3 class="text-danger">26</h3>
            <p>Архив</p>
        </div>
    </div>
@endsection