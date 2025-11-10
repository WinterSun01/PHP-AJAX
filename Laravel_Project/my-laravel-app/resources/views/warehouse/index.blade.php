@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Склад</h1>
            <p class="lead">Управление остатками, поступлениями и движением товаров.</p>
        </div>
    </div>

    <!-- Кнопки -->
    <div class="d-flex gap-2 mb-4">
        <a href="{{ route('warehouse.stock') }}" class="btn btn-primary">
            Остатки
        </a>
        <a href="{{ route('warehouse.receipts') }}" class="btn btn-success">
            Поступления
        </a>
        <button class="btn btn-outline-secondary" onclick="alert('Отчёты в разработке')">
            Отчёты
        </button>
    </div>

    <!-- Карточки со статистикой -->
    <div class="row g-4">
        <div class="col-md-3">
            <div class="card text-center border-primary">
                <div class="card-body">
                    <h3 class="text-primary">1 247</h3>
                    <p class="card-text">Товаров на складе</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-center border-success">
                <div class="card-body">
                    <h3 class="text-success">₽12.5 млн</h3>
                    <p class="card-text">Общая стоимость</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-center border-warning">
                <div class="card-body">
                    <h3 class="text-warning">89</h3>
                    <p class="card-text">Заканчивается</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-center border-danger">
                <div class="card-body">
                    <h3 class="text-danger">12</h3>
                    <p class="card-text">Нет на складе</p>
                </div>
            </div>
        </div>
    </div>

    <hr class="my-5">

    <!-- Таблица последних поступлений -->
    <h4>Последние поступления</h4>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead class="table-light">
                <tr>
                    <th>Дата</th>
                    <th>Поставщик</th>
                    <th>Товаров</th>
                    <th>Сумма</th>
                    <th>Статус</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>09.11.2025</td>
                    <td>ООО "Поставка"</td>
                    <td>45</td>
                    <td>₽890 000</td>
                    <td><span class="badge bg-success">Принято</span></td>
                </tr>
                <tr>
                    <td>08.11.2025</td>
                    <td>ИП Иванов</td>
                    <td>12</td>
                    <td>₽234 000</td>
                    <td><span class="badge bg-warning">В обработке</span></td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection