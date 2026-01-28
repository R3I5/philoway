<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

// rota puxa dashboard criada através do breeze, rota autenticada
Route::get('/dashboard', function () {
    return Inertia::render('Dashboard'); //retorna o component dashboard
})->middleware(['auth', 'verified'])->name('dashboard'); // se a sessão é autenticada e verificada, a tela vai para o dashboard

Route::middleware('auth')->group(function () { // o usuário precisa ser autentificado para que seja possível acessar o perfil.
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
