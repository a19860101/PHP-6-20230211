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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/article',App\Http\Controllers\ArticleController::class);
Route::resource('/category',App\Http\Controllers\CategoryController::class);
Route::get('admin/article',[App\Http\Controllers\ArticleController::class,'admin_article_index'])->name('admin.article.index');
Route::delete('admin/article/{article}',[App\Http\Controllers\ArticleController::class,'admin_article_destroy'])->name('admin.article.destroy');
Route::get('admin/article/{id}',[App\Http\Controllers\ArticleController::class,'admin_article_restore'])->name('admin.article.restore');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
