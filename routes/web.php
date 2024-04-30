<?php

use App\Http\Controllers\avisController;
use App\Http\Controllers\deliberationController;
use App\Http\Controllers\entrepriseController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\signataireController;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\FuncCall;

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


Route::get('/dashboard', function () {
    return view('layouts.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('avis', AvisController::class);
Route::prefix('/avis')->name('avis.')->controller(AvisController::class)->group(function (){
    Route::get('/','index' )->name('index');
    Route::get('/{avis}/editAvis', 'edit')->name('editAvis');
    Route::put('/{id}', 'update')->name('update');
    Route::post('/','store');
});

Route::resource('deliberation', DeliberationController::class);
Route::prefix('/deliberation')->name('deliberation.')->controller(deliberationController::class)->group( function (){
    Route::get('/','index' )->name('index');
    Route::get('/{deliberation}/editDelib', 'edit')->name('editDelib');
    Route::put('/{id}', 'update')->name('update');
    Route::post('/','store' );
});

Route::resource('entreprise', EntrepriseController::class);
Route::prefix('/entreprise')->name('entreprise.')->controller(EntrepriseController::class)->group( function(){
    Route::get('/','index')->name('index');
    Route::post('/', 'store');
    Route::get('/{entreprise}/edit', 'edit')->name('edit');
    Route::put('/{entreprise}', 'update')->name('update');
    Route::delete('/{entreprise}', 'destroy')->name('destroy');

    Route::delete('/force/{id}', 'forceDestroy')->name('force.destroy');
    Route::put('/restore/{id}', 'restore')->name('restore');
});

Route::resource('Elu', signataireController::class);
Route::prefix('Elu')->name('Elu.')->controller(signataireController::class)->group( function(){
    Route::get('/','index')->name('index');
    Route::post('/', 'store');
});

require __DIR__.'/auth.php';

