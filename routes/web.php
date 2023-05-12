<?php

use App\Http\Controllers\ComunasController;
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

Route::get ('/Comunas', [ComunasController ::class,'index']) -> name ('comunas.index');
Route::post ('/Comunas', [ComunasController ::class,'store']) -> name ('comunas.store');
Route::get('/Comunas/create', [ComunasController ::class,'create']) -> name ('comunas.create');
Route::delete ('/Comunas/{comuna}', [ComunasController ::class,'detroy']) -> name ('comunas.detroy');
