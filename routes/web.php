<?php

use App\Http\Controllers\UsersController;
use App\Http\Controllers\PagesController;

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

// defafult route

// Route::get('/', function () {
//     return view('welcome');
// });

// new route
Route::get('/', [UsersController::class, 'index'])->name('home');
// Route::get('/users', [UsersController::class, 'index']); //alternative route for if i scale the web app


Route::get('/contribute', [PagesController::class, 'contribute'])->name('contribute');
Route::get('/about', [PagesController::class, 'about'])->name('about');
