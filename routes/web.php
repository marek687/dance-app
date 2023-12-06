<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EventsController;
use App\Http\Controllers\UserController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/events',[EventsController::class,'index'])->name('events.index');
Route::get('/events/create',[EventsController::class,'create'])->name('events.create');
Route::post('/events/store',[EventsController::class,'store'])->name('events.store');
Route::get('/events/{events}/edit',[EventsController::class,'edit'])->name('events.edit');
Route::put('/events/{events}/update',[EventsController::class,'update'])->name('events.update');
Route::delete('/events/{events}/destroy',[EventsController::class,'destroy'])->name('events.destroy');


Route::get('/users/list',[UserController::class,'index'])->name('users.index');
