<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperheroeController;

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
    return view('auth.login');
});

//Route::get('empleado/create',[EmpleadoController::class,'create']);
Route::resource('superheroes',SuperheroeController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function(){
    Route::get('/', [SuperheroeController::class, 'index'])-name('home');

});

