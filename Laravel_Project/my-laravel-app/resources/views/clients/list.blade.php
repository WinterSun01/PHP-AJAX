@extends('layouts.app')

@section('content')
    <h1>Список клиентов</h1>
    <p>Здесь будет отображаться таблица с клиентами.</p>

    <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-3">
        <a href="{{ route('clients.create') }}" class="btn btn-success">
            Добавить клиента
        </a>
        <a href="{{ route('clients.index') }}" class="btn btn-secondary">
            Назад
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Имя</th>
                    <th>Телефон</th>
                    <th>Email</th>
                    <th>Действия</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Иванов Иван</td>
                    <td>+7 (999) 123-45-67</td>
                    <td>ivan@example.com</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-primary">Просмотр</a>
                        <a href="#" class="btn btn-sm btn-warning">Редактировать</a>
                        <a href="#" class="btn btn-sm btn-danger">Удалить</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Петров Пётр</td>
                    <td>+7 (999) 987-65-43</td>
                    <td>petr@example.com</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-primary">Просмотр</a>
                        <a href="#" class="btn btn-sm btn-warning">Редактировать</a>
                        <a href="#" class="btn btn-sm btn-danger">Удалить</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection