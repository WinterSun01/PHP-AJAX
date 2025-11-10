@extends('layouts.app')

@section('content')
    <h1>История звонков</h1>
    <p>Все входящие и исходящие звонки.</p>

    <div class="d-flex justify-content-between mb-3">
        <a href="{{ route('history.index') }}" class="btn btn-secondary">
            Назад
        </a>
        <button class="btn btn-primary" onclick="alert('Фильтры в разработке')">
            Фильтры
        </button>
    </div>

    <div class="table-responsive">
        <table class="table table-hover">
            <thead class="table-light">
                <tr>
                    <th>Дата</th>
                    <th>Тип</th>
                    <th>Контакт</th>
                    <th>Номер</th>
                    <th>Длительность</th>
                    <th>Статус</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>09.11.2025 14:30</td>
                    <td><span class="badge bg-success">Исходящий</span></td>
                    <td>Иванов Иван</td>
                    <td>+7 (999) 123-45-67</td>
                    <td>3 мин 12 сек</td>
                    <td><span class="badge bg-success">Отвечен</span></td>
                </tr>
                <tr>
                    <td>09.11.2025 11:15</td>
                    <td><span class="badge bg-danger">Входящий</span></td>
                    <td>Петров Пётр</td>
                    <td>+7 (987) 654-32-10</td>
                    <td>—</td>
                    <td><span class="badge bg-secondary">Пропущен</span></td>
                </tr>
                <tr>
                    <td>08.11.2025 16:45</td>
                    <td><span class="badge bg-success">Исходящий</span></td>
                    <td>Анна Смирнова</td>
                    <td>+7 (912) 345-67-89</td>
                    <td>5 мин 40 сек</td>
                    <td><span class="badge bg-success">Отвечен</span></td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection