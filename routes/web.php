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

Route::get('/' , function()
{
    return view('welcome');
}); 

route::get('post', function()
{
    return response()->json([
        'title' => 'mon super titre ',
        'description'=> 'ma super description'
    ]);
});

Route::get('article', function()
{
    return view('Article');
});

/*
Route::get('post' , function()
{
    return response()->json([
        'title'=> 'mon super titre',
        'description'=> 'ma super description'
    ]);
});

route::get('article' , function(){
    return  view('Articles');
});

*/