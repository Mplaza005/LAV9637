<?php

use App\Http\Controllers\OperacionesController;
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
/*
Route::get('/', function () {
    return view('welcome');
});

*/
//Route::get('sumanormal/{num1}/{num2}', [CursoController::class,'suma']);

Route::get('suma/{num1}/{num2}',[OperacionesController::class,'suma']);

Route::get('amigos/{num1}/{num2}',[OperacionesController::class,'amigos']);

Route::get('primo/{num1}',[OperacionesController::class,'primo']);