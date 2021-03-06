<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('view', function () {
    return view('welcome');
});

Route::get('/' , [PostController::class , 'index'] ) ->name('Accueil');
Route::get('create' , [PostController::class , 'create'] )->name('posts.create');
Route::get('posts/{id}' , [PostController::class , 'show'])->name('posts.show');
Route::get('contact' , [PostController::class , 'contact'] )->name('contact');



Route::post('create' , [PostController::class , 'store'] )->name('posts.store');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
