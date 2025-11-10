@extends('layouts.app')

@section('content')
    <h1>Создание клиента</h1>
    <p>Заполните форму для добавления нового клиента.</p>

    <form>
        <div class="row g-3">
            <div class="col-md-6">
                <label for="name" class="form-label">Имя</label>
                <input type="text" class="form-control" id="name" placeholder="Иванов Иван">
            </div>
            <div class="col-md-6">
                <label for="phone" class="form-label">Телефон</label>
                <input type="text" class="form-control" id="phone" placeholder="+7 (999) 123-45-67">
            </div>
            <div class="col-12">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="email@example.com">
            </div>
            <div class="col-12">
                <label for="company" class="form-label">Компания</label>
                <input type="text" class="form-control" id="company" placeholder="ООО Строительство">
            </div>
        </div>

        <hr class="my-4">

        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
            <button type="submit" class="btn btn-success">Сохранить</button>
            <a href="{{ route('clients.list') }}" class="btn btn-secondary">Отмена</a>
        </div>
    </form>
@endsection