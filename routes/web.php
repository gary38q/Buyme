<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UndianController;
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
    return redirect('/Home');
});

Route::get('/Home', [ProductController::class, 'getallhome']);

Route::get('/Products', [ProductController::class, 'getallproduct']);

Route::get('/Contact', function () {
    return view('contactus');
});

Route::get('/Detail-Product/{id}', [ProductController::class, 'getproduct']);

Route::get('/Form-Undian', [UndianController::class, 'showform']);

Route::post('/Insert-Undian', [UndianController::class, 'add_undian']);

Route::get('/generate-random', [UndianController::class, 'generate_random']);