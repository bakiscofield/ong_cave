<?php

use App\Http\Controllers\ProjetController;
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
    return view('projet.index');

});
Route::get('/projet/create', [projetController::class, 'create'])->name('projet.create');
Route::get('/projet/index', [projetController::class, 'index'])->name('projet.index');

