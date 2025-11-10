@extends('layouts.app')

@section('content')
    <h1>Создать контакт</h1>
    <p>Заполните форму, чтобы добавить новый контакт.</p>

    <form>
        <div class="row g-3">
            <div class="col-md-6">
                <label class="form-label">Имя *</label>
                <input type="text" class="form-control" placeholder="Иванов Иван">
            </div>
            <div class="col-md-6">
                <label class="form-label">Должность</label>
                <input type="text" class="form-control" placeholder="Менеджер">
            </div>
            <div class="col-md-6">
                <label class="form-label">Компания</label>
                <input type="text" class="form-control" placeholder="ООО Строительство">
            </div>
            <div class="col-md-6">
                <label class="form-label">Телефон *</label>
                <input type="text" class="form-control" placeholder="+7 (999) 123-45-67">
            </div>
            <div class="col-12">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" placeholder="email@example.com">
            </div>
            <div class="col-12">
                <label class="form-label">Примечание</label>
                <textarea class="form-control" rows="3" placeholder="Дополнительная информация..."></textarea>
            </div>
        </div>

        <hr class="my-4">

        <div class="d-flex gap-2">
            <button type="button" class="btn btn-success" onclick="alert('Контакт сохранён!')">
                Сохранить
            </button>
            <a href="{{ route('contacts.list') }}" class="btn btn-secondary">
                Отмена
            </a>
        </div>
    </form>
@endsection