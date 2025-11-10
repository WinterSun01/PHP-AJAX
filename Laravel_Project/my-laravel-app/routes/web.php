<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\WarehouseController;
use App\Http\Controllers\TaskController;

// === ГЛАВНАЯ CRM ===
Route::get('/', function () {
    return view('welcome');
})->name('home');

// === КЛИЕНТЫ ===
Route::prefix('clients')->group(function () {
    Route::get('/', [ClientController::class, 'index'])->name('clients.index');
    Route::get('/list', [ClientController::class, 'list'])->name('clients.list');
    Route::get('/create', [ClientController::class, 'create'])->name('clients.create');
    Route::get('/edit', [ClientController::class, 'edit'])->name('clients.edit');
    Route::get('/delete', [ClientController::class, 'delete'])->name('clients.delete');
});

// === КОНТАКТЫ ===
Route::prefix('contacts')->group(function () {
    Route::get('/', [ContactController::class, 'index'])->name('contacts.index');
    Route::get('/list', [ContactController::class, 'list'])->name('contacts.list');
    Route::get('/create', [ContactController::class, 'create'])->name('contacts.create');
});

// === ИСТОРИЯ ===
Route::prefix('history')->group(function () {
    Route::get('/', [HistoryController::class, 'index'])->name('history.index');
    Route::get('/calls', [HistoryController::class, 'calls'])->name('history.calls');
    Route::get('/email', [HistoryController::class, 'email'])->name('history.email');
});

// === ПРОДАЖИ ===
Route::prefix('sales')->group(function () {
    Route::get('/', [SaleController::class, 'index'])->name('sales.index');
    Route::get('/deals', [SaleController::class, 'deals'])->name('sales.deals');
    Route::get('/returns', [SaleController::class, 'returns'])->name('sales.returns');
});

// === СКЛАД ===
Route::prefix('warehouse')->group(function () {
    Route::get('/', [WarehouseController::class, 'index'])->name('warehouse.index');
    Route::get('/stock', [WarehouseController::class, 'stock'])->name('warehouse.stock');
    Route::get('/receipts', [WarehouseController::class, 'receipts'])->name('warehouse.receipts');
});

// === ЗАДАЧИ ===
Route::prefix('tasks')->group(function () {
    Route::get('/', [TaskController::class, 'index'])->name('tasks.index');
});

// ==================================================================
// === родительская и дочерняя страницы ===
// ==================================================================

Route::get('/parent', function () 
{
    return view('parent');
})->name('parent');

Route::get('/child', function () 
{
    $users = [
        ['id' => 1, 'name' => 'Анна Иванова',   'email' => 'anna@example.com', 'description' =>     'Менеджер по продажам.'],
        ['id' => 2, 'name' => 'Пётр Сидоров',   'email' => 'petr@example.com', 'description' =>     'Разработчик.'],
        ['id' => 3, 'name' => 'Мария Смирнова', 'email' => 'maria@example.com', 'description' =>    'Дизайнер.'],
    ];

    return view('child', compact('users'));
})->name('child');