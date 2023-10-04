<?php

use App\Http\Controllers\UsersController;
use App\Http\Controllers\PagesController;
use App\Livewire\UsersTable;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::redirect('/', '/users')->name('home');

Route::get('/users', [UsersController::class, 'index']);

Route::get('/contribute', [PagesController::class, 'contribute'])->name('contribute');
Route::get('/about', [PagesController::class, 'about'])->name('about');
