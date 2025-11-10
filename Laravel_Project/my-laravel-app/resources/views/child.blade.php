@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Дочерняя страница — Список пользователей</h1>
        <a href="{{ route('parent') }}" class="btn btn-secondary mb-3">Назад</a>

        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>Имя</th>
                        <th>Email</th>
                        <th>Действие</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <x-partials.user-row
                            :id="$user['id']"
                            :name="$user['name']"
                            :email="$user['email']"
                            :description="$user['description']"
                        />
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- для раскрытия описания -->
    <script>
        document.addEventListener('DOMContentLoaded', function () 
        {
            document.querySelectorAll('.toggle-desc').forEach(button => 
            {
                button.addEventListener('click', function () 
                {
                    const id = this.getAttribute('data-id');
                    const row = document.getElementById('desc-' + id);
                    if (row.style.display === 'none') 
                        {
                            row.style.display = 'table-row';
                            this.textContent = 'Скрыть описание';
                        } 
                    else 
                        {
                            row.style.display = 'none';
                            this.textContent = 'Показать описание';
                        }
                });
            });
        });
    </script>
@endsection