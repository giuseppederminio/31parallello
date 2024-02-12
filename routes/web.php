<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

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

Route::get('/', [PublicController::class,'home'])->name('home');
Route::get('/galleria/index',[PublicController::class,'index'])->name('galleria.index');
Route::get('/contatti', [PublicController::class,'contatti'])->name('contatti');
