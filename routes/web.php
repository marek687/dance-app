<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EventsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\UserGroupController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserEventsController;
use App\Http\Controllers\CarsController;
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

Route::get('/',[HomeController::class,'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/events',[EventsController::class,'index'])->name('events.index');
Route::get('/events/create',[EventsController::class,'create'])->name('events.create');
Route::post('/events/store',[EventsController::class,'store'])->name('events.store');
Route::get('/events/{events}/edit',[EventsController::class,'edit'])->name('events.edit');
Route::put('/events/{events}/update',[EventsController::class,'update'])->name('events.update');
Route::delete('/events/{events}/destroy',[EventsController::class,'destroy'])->name('events.destroy');

Route::get('/events/{events}/sort', [EventsController::class, 'sort'])->name('events.sort');
Route::get('/events/{events}/eventsuser',[EventsController::class,'eventsuser'])->name('events.eventsuser');

Route::get('/invoice',[EventsController::class,'pdf_generator_get']);


Route::get('/users/list',[UserController::class,'index'])->name('users.index')->middleware('can:isAdmin');


Route::get('/group', [GroupController::class, 'index'])->name('group.index');
Route::get('/group/create', [GroupController::class, 'create'])->name('group.create');
Route::post('/group', [GroupController::class, 'store'])->name('group.store');
Route::get('/group/{group}/edit', [GroupController::class, 'edit'])->name('group.edit');
Route::put('/group/{group}/update', [GroupController::class, 'update'])->name('group.update');
Route::delete('/group/{group}/destroy', [GroupController::class, 'destroy'])->name('group.destroy');

Route::get('/group/{group}/groupuser', [GroupController::class, 'groupuser'])->name('group.groupuser');





Route::get('/group-user', [UserGroupController::class, 'index'])->name('group-user.index');
Route::get('/group-user/show', [UserGroupController::class, 'show'])->name('group-user.show');
Route::get('/group-user/create', [UserGroupController::class, 'create'])->name('group-user.create');




