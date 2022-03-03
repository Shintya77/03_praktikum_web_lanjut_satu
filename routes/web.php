<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [HomeController::class, 'home']);
Route::prefix('/produk')->group(function(){
    Route::get('/p1', [ProdukController::class, 'produk1']);
    Route::get('/p2', [ProdukController::class, 'produk2']);
    Route::get('/p3', [ProdukController::class, 'produk3']);
});
Route::get('/news/{id}', [NewsController::class, 'berita']);
Route::prefix('/program')->group(function(){
        Route::get('program1',[ProgramController::class, 'program1']);
        Route::get('program2',[ProgramController::class, 'program2']);
        Route::get('program3',[ProgramController::class, 'program3']);
    
});
Route::get('/about', function(){
    return view('about');
});
Route::resource('/contact',ContactController::class);
