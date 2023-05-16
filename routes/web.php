<?php

use App\Http\Controllers\MyPostController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/post', [MyPostController::class,'index']);
Route::get('/post/{myPost}', [MyPostController::class,'show']);
Route::get('/post/create/article', [MyPostController::class,'create']);
Route::post('/post/create/article', [MyPostController::class,'store']);
Route::get('/post/{myPost}/edit', [MyPostController::class,'edit']);
Route::put('/post/{myPost}/edit', [MyPostController::class,'update']);
Route::delete('/post/{myPost}', [MyPostController::class,'destroy']);
