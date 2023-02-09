<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GameController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PemainController;



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
    return redirect('/Dashboard');
});

//dashboard
Route::get('/Dashboard',[DashboardController::class,'Dashboard'])->name('Dashboard');
Route::get('/gamepemain',[DashboardController::class,'Gamepemain'])->name('Gamepemain');
Route::post('/tambahgamepemain',[DashboardController::class,'Gamespem'])->name('Gamespem');
Route::get('/delatetrend/{id}',[DashboardController::class,'gametrend'])->name('gametrend');

//data pemain
Route::get('/pemain',[PemainController::class, 'pemain'])->name('pemain');
Route::get('/tambahpemain',[PemainController::class, 'tambahpemain'])->name('tambahpemain');
Route::post('/insertpemain',[PemainController::class, 'insertpemain'])->name('insertpemain');
Route::get('/tampilkandata/{id}',[PemainController::class, 'tampilkandata'])->name('tampilkandata');
Route::post('/updatedata/{id}',[PemainController::class, 'updatedata'])->name('updatedata');
Route::get('/deletedata/{id}',[PemainController::class, 'deletedata'])->name('deletedata');

//data game 
Route::get('/game',[GameController::class,'games'])->name('games');
Route::get('/tambahgame',[GameController::class,'tambahgames'])->name('tambahgames');
Route::post('/insertgame',[GameController::class,'insertgames'])->name('insertgames');
Route::get('/tampilgame/{id}',[GameController::class,'tampilgames'])->name('tampilgames');
Route::post('/updategame/{id}',[GameController::class,'updategames'])->name('updategames');
Route::get('/deletegame/{id}',[GameController::class,'deletegames'])->name('deletegames');
