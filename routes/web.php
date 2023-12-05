<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FonctionnaireController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|


Route::get('/', function () {
    return view('welcome');
});
*
Route::get('/', function () {
    return view('index');
});

Route::get('/{page}', [AdminController::class, 'index']);

/*

Route::get('show/{id}', 'SituationController@show');
Route::get('/search', 'SituationController@search');
Route::get('pdf/{id}', 'SituationController@savePDF');
#Route::get('fonctionnaires', 'FonctionnaireController@index');

Route::controller(FonctionnaireController::class)->group(function () {
Route::get('/fonctionnaires','index');
Route::get('/fonctionnaires/add', 'create');
Route::post('/fonctionnaires','store');
#Route::post('/fonctionnaires', 'FonctionnaireController@store')->name('fonctionnaires.store');
});
*/
Route::resource('fonctionnaires', FonctionnaireController::class);
/*

/*Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/
