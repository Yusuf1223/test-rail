<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ServiceController;

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

//Route::get('/', [\App\Http\Controllers\ServiceController::class, 'list']);
Route::view('/', 'home');

Route::view('about', 'about')->middleware('test');

//Route::get('costumers', [CostumerController::class, 'index']);
//Route::get('costumers/create', [CostumerController::class, 'create']);
//Route::post('costumers', [CostumerController::class, 'store']);
//Route::get('costumers/{costumer}', [CostumerController::class, 'show']);
//Route::get('costumers/{costumer}/edit', [CostumerController::class, 'edit']);
//Route::put('costumers/{costumer}', [CostumerController::class, 'update']);
//Route::delete('costumers/{costumer}', [CostumerController::class, 'destroy']);

Route::resource('services', ServiceController::class);
Route::resource('news', NewsController::class);

