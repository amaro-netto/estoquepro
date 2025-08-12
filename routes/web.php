<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
})->name('home');
// Rotas para a gestão de produtos
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
// Essa é a rota do dashboard que estamos redirecionando no controller
// Por enquanto, ela pode ser uma rota básica
Route::get('/dashboard', function () {
    return "Bem-vindo ao Dashboard!";
})->name('dashboard');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
