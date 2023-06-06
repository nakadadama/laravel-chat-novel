<?php

use App\Http\Controllers\ProfileController;
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
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ChatGptController;

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\AllArticlesController;


Route::get('/chat', [ChatGptController::class, 'index'])->name('chat_gpt-index');
Route::post('/chat', [ChatGptController::class, 'chat'])->name('chat_gpt-chat');
Route::post('/confirm', [ChatGptController::class, 'confirm'])->name('chat_gpt-confirm');

// 記事関連のルート
Route::get('/articles', [ArticlesController::class, 'index'])->name('articles.index');
Route::get('/articles/{id}', [ArticlesController::class, 'show'])->name('articles.show');
Route::post('/articles', [ArticlesController::class, 'store'])->name('articles.store');
Route::delete('/articles/{id}', [ArticlesController::class, 'destroy'])->name('articles.destroy');
Route::get('/articles/{id}/edit', [ArticlesController::class, 'edit'])->name('articles.edit');
Route::put('/articles/{id}', [ArticlesController::class, 'update'])->name('articles.update');

Route::middleware(['auth'])->group(function () {
    Route::get('/articles', [ArticlesController::class, 'index'])->name('articles.index');
    
});


Route::get('/all-articles', [AllArticlesController::class, 'index'])->name('all-articles.index');
Route::get('/articles/{id}', [AllArticlesController::class, 'show'])->name('all-articles.show');



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



