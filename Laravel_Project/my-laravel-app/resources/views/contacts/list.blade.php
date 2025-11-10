@extends('layouts.app')

@section('content')
    <h1>Список контактов</h1>
    <p>Все контакты в системе. Поиск и фильтры — скоро.</p>

    <div class="d-flex justify-content-between mb-3">
        <a href="{{ route('contacts.create') }}" class="btn btn-success">
            Добавить контакт
        </a>
        <a href="{{ route('contacts.index') }}" class="btn btn-secondary">
            Назад
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-hover align-middle">
            <thead class="table-light">
                <tr>
                    <th>Имя</th>
                    <th>Должность</th>
                    <th>Компания</th>
                    <th>Телефон</th>
                    <th>Email</th>
                    <th>Действия</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Анна Смирнова</td>
                    <td>Менеджер по продажам</td>
                    <td>ООО "Солнышко"</td>
                    <td>+7 (912) 345-67-89</td>
                    <td>anna@solnyshko.ru</td>
                    <td>
                        <button class="btn btn-sm btn-primary">Просмотр</button>
                        <button class="btn btn-sm btn-warning">Редактировать</button>
                    </td>
                </tr>
                <tr>
                    <td>Дмитрий Васильев</td>
                    <td>Логист</td>
                    <td>ИП Васильев</td>
                    <td>+7 (905) 111-22-33</td>
                    <td>dmitry@vasiliev.ru</td>
                    <td>
                        <button class="btn btn-sm btn-primary">Просмотр</button>
                        <button class="btn btn-sm btn-warning">Редактировать</button>
                    </td>
                </tr>
                <tr>
                    <td>Елена Петрова</td>
                    <td>Бухгалтер</td>
                    <td>ЗАО "Феникс"</td>
                    <td>+7 (926) 555-44-33</td>
                    <td>elena@fenix.ru</td>
                    <td>
                        <button class="btn btn-sm btn-primary">Просмотр</button>
                        <button class="btn btn-sm btn-warning">Редактировать</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection