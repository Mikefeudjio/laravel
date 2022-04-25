<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostControlLer;
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

Route::get('/' , [PostControlLer::class , 'index']) ->name('welcome');
Route::get('posts/{id}' , [PostControlLer::class , 'Show'])->name('posts.show');
Route::get('posts/create' , [PostControlLer::class , 'create'])->name('posts.create ');
Route::get('contact' , [PostControlLer::class , 'contact']) ->name('contact');



// les functions json

/*
route::get('post' , function(){
    return response()->json([
        'title'=> 'mon super titre',
        'description' => 'ma super description'
    ]);
});
  */