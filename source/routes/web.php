<?php

use App\Http\Controllers\CategorieProjetController;
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

// Route::get('/', function () {
//     return view('projet.index');

// });

Route::get('/', function () {
    return view('test');

});

// projet
Route::get('/projet/create', [projetController::class, 'create'])->name('projet.create');
Route::get('/projet/index', [projetController::class, 'index'])->name('projet.index');
Route::post('/projet/store', [projetController::class, 'store'])->name('projet.store');
Route::DELETE('/projet/destroy/{projet}', [ProjetController::class, 'destroy'])->name('projet.destroy');
// categorie_projet
Route::get('/categorie_projet/index', [CategorieProjetController::class, 'index'])->name('categorie_projet.index');
Route::DELETE('/categorie_Projet/destroy/{categorie_projet}', [CategorieProjetController::class, 'destroy'])->name('categorie_projet.destroy');
Route::post('/categorie_projet/store', [CategorieProjetController::class, 'store'])->name('categorie_projet.store');
