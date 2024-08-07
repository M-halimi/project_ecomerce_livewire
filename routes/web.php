<?php

use App\Http\Controllers\ProfileController;
use App\Livewire\Articles\ArticlesCreate;
use App\Livewire\Articles\ArticlesIndex;
use App\Livewire\Articles\ArticlesUpdate;
use App\Livewire\Categories\CategoriesIndex;
use App\Models\Article;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // start Route for Table Article
    Route::get('/article',ArticlesIndex::class)->name('articles.index');
    Route::get('/article/create',ArticlesCreate::class)->name('articles.create');
    Route::delete('/article/{id}',ArticlesIndex::class)->name('articles.delete');
    Route::get('/article/{article}/edit',ArticlesUpdate::class)->name('articles.edit');
    Route::put('/article/{article}',ArticlesUpdate::class)->name('articles.update');
    // end Route Table Article

    // start Route Table Categorie
    Route::get('/categorie',CategoriesIndex::class)->name('categorie.index');
    // end Route Table Categorie
});

require __DIR__.'/auth.php';
