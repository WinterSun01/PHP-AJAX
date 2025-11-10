@extends('layouts.app')

@section('content')
    <h1>Продажи</h1>
    <p>Отслеживание сделок, возвратов и аналитики.</p>

    <ul class="nav nav-tabs mb-4">
        <li class="nav-item">
            <a class="nav-link active" href="{{ route('sales.index') }}">Обзор</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('sales.deals') }}">Сделки</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('sales.returns') }}">Возвраты</a>
        </li>
    </ul>

    <div class="row text-center">
        <div class="col-md-4">
            <div class="card border-primary mb-3">
                <div class="card-body">
                    <h5 class="card-title text-primary">15</h5>
                    <p class="card-text">Активных сделок</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-success mb-3">
                <div class="card-body">
                    <h5 class="card-title text-success">₽1,250,000</h5>
                    <p class="card-text">Продажи за месяц</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-warning mb-3">
                <div class="card-body">
                    <h5 class="card-title text-warning">3</h5>
                    <p class="card-text">Возвраты</p>
                </div>
            </div>
        </div>
    </div>

    <hr>

    <a href="{{ route('sales.deals') }}" class="btn btn-primary">Перейти к сделкам</a>
@endsection