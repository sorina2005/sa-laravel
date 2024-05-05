<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RecipesController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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



//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about-us', function(){
    return view('aboutus');
})->name('about-us');

Route::get('/contact', [ContactController::class, 'contact'])->name('contact');


Route::middleware('auth')->group(function (): void {
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
    Route::get('/recipes', [RecipesController::class, 'recipes'])->name('recipes');
    });


Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/authenticate', [UserController::class, 'authenticate'])->name('authenticate');

Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/create-user', [UserController::class, 'create'])->name('create-user');
