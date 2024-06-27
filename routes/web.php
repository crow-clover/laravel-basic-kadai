<?php

use Illuminate\Support\Facades\Route;
 //　ルーティングを設定するコントローラーを宣言する
    use App\Http\Controllers\PostController;
    use App\Http\Controllers\ProductController;

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

Route::get('/posts', [PostController::class,'index']);

Route::get('/products', [ProductController::class, 'index']);