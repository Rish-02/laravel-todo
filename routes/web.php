<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\todosController;

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

Route::get('/showAll', [todosController:: class,'index'])->name("todo.showAll");
Route::get('/showIncomplete', [todosController:: class,'incompleteHome'])->name("todo.incompleteHome");
Route::get('/', [todosController:: class,'completed'])->name("todo.home");

Route::get('/create', function () {
    return view('create');
})->name("todo.create");

Route::get('/edit', function () {
    return view('update');
});
#create 
Route::post('/create',[todosController::class,'store'])->name("todo.store");
#delete
Route::get('/delete/{id}',[todosController::class,'delete'])->name("todo.delete");
Route::get('/markComplete/{id}',[todosController::class,'markComplete'])->name("todo.markComplete");
