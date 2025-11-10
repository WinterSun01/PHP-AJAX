@extends('layouts.app')

@section('content')
<div class="container text-center mt-5">
    <h1 class="display-4 mb-4">Laravel Project</h1>
    <p class="lead mb-5">Выберите задание для просмотра:</p>

    <div class="row justify-content-center g-4">
        <!-- Кнопка 1: CRM -->
        <div class="col-md-5">
            <a href="{{ route('clients.index') }}" class="btn btn-primary btn-lg w-100 p-4 d-flex flex-column align-items-center">
                <i class="bi bi-building fs-1 mb-2"></i>
                <strong>CRM Система</strong>
                <small class="text-muted">Клиенты, Склад, Задачи и др.</small>
            </a>
        </div>

        <!-- Кнопка 2: Blade Задание -->
        <div class="col-md-5">
            <a href="{{ route('parent') }}" class="btn btn-success btn-lg w-100 p-4 d-flex flex-column align-items-center">
                <i class="bi bi-code-slash fs-1 mb-2"></i>
                <strong>Blade Компоненты</strong>
                <small class="text-muted">Родительская → Дочерняя → Раскрытие строк</small>
            </a>
        </div>
    </div>

    <hr class="my-5">

</div>
@endsection