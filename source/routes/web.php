<?php

use App\Http\Controllers\ArchiveController;
use App\Http\Controllers\CategorieProjetController;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\TypeArchiveController;
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
Route::get('/projet/{projet}/edit', [ProjetController::class, 'edit'])->name('projet.edit');
Route::PUT('/projet/{projet}/update', [ProjetController::class, 'update'])->name('projet.update');

// categorie_projet
Route::get('/categorie_projet/index', [CategorieProjetController::class, 'index'])->name('categorie_projet.index');
Route::DELETE('/categorie_Projet/destroy/{categorie_projet}', [CategorieProjetController::class, 'destroy'])->name('categorie_projet.destroy');
Route::post('/categorie_projet/store', [CategorieProjetController::class, 'store'])->name('categorie_projet.store');
Route::get('/categorie_projet/{categorie_projet}/edit', [CategorieProjetController::class, 'edit'])->name('categorie_projet.edit');

//archive
Route::get('/archive/index', [ArchiveController::class, 'index'])->name('archive.index');
Route::get('/type_archive/index', [ArchiveController::class, 'index'])->name('archive.index');
Route::get('/archive/create', [ArchiveController::class, 'create'])->name('archive.create');
Route::post('/archive/store', [ArchiveController::class, 'store'])->name('archive.store');

// type archive

Route::get('/type_archive/index', [TypeArchiveController::class, 'index'])->name('type_archive.index');
Route::post('/type_archive/store', [TypeArchiveController::class, 'store'])->name('type_archive.store');
Route::DELETE('/type_archive/destroy/{type_archive}', [TypeArchiveController::class, 'destroy'])->name('type_archive.destroy');
Route::get('/typearchive/{type_archive}/edit', [TypeArchiveController::class, 'edit'])->name('type_archive.edit');
Route::post('/typearchive/{type_archive}', [TypeArchiveController::class, 'update'])->name('type_archive.update');
