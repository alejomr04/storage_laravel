<?php

use App\Http\Controllers\InfoController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[InfoController::class, 'index'])->name('index');
Route::get('/create',[InfoController::class, 'create'])->name('create');
Route::post('/store',[InfoController::class, 'store'])->name('store');


Route::get('/edit/{note}', [InfoController::class, 'edit'])->name('edit');
Route::put('/update/{note}', [InfoController::class, 'update'])->name('update');

Route::get('/show/{note}', [InfoController::class, 'show'])->name('show');
Route::get('/delete/{note}', [InfoController::class, 'destroy'])->name('delete');
