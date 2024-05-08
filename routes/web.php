<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\UserController;
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


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');

Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::post('/create-message', [ContactController::class, 'create'])->name('create-message');

Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/authenticate', [UserController::class, 'authenticate'])->name('authenticate');

Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/create-user', [UserController::class, 'create'])->name('create-user');

Route::post('/language-switch', [LanguageController::class, 'languageSwitch'])->name('language-switch');

Route::middleware('auth')->group(function (): void {
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');

    Route::get('profile', [ProfileController::class, 'profile'])->name('profile');
    Route::post('update/picture', [ProfileController::class, 'updatePicture'])->name('update-picture');
    Route::post('update/info', [ProfileController::class, 'updateInfo'])->name('update-info');

    Route::get('/recipes', [RecipeController::class, 'recipes'])->name('recipes');
    Route::get('/create', RecipeController::class . '@create')->name('recipes-create');
    Route::post('/store', RecipeController::class . '@store')->name('store');
    Route::get('/recipes/{post}/edit', RecipeController::class . '@edit')->name('edit');
    Route::put('/recipes/{post}', RecipeController::class . '@update')->name('update');
    Route::get('/recipes/{post}', RecipeController::class . '@show')->name('show');
    Route::delete('/recipes/{post}', RecipeController::class . '@destroy')->name('destroy');

    Route::get('/favorites', [FavoriteController::class, 'favorites'])->name('favorites');
    Route::post('/favorites', [FavoriteController::class, 'upload'])->name('create-favorite');
    Route::delete('/favorites/{post}', [FavoriteController::class, 'destroy'])->name('delete-favorite');

    Route::post('/comment', [CommentController::class, 'store'])->name('comment');
    Route::get('/comment/{post}', [CommentController::class, 'show'])->name('add-comment');
    Route::get('/comments/{post}', [CommentController::class, 'showComments'])->name('show-comments');
});
