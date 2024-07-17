<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\RetraitController;

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


route::get("/registration/invitation/{parain}", [ClientController::class, "register"]);


//route::get("/registration", [ClientController::class, "register"]);

route::get("/", [ClientController::class, "choix"]);

route::get("/compte", [ClientController::class, "compte"])->middleware('auth');


// Route Kevin

Route::get('/signin', [ClientController::class, 'signin'])->name('login');

Route::get('/acceuil', [ClientController::class, 'acceuil'])->name('acceuil')->middleware('auth');

Route::get('/inviter', [ClientController::class, 'inviter'])->middleware('auth');

Route::get('/recharger', [ClientController::class, 'recharger'])->middleware('auth');

Route::get('/rechargeMtn', [ClientController::class, 'rechargeMtn'])->middleware('auth');

Route::get('/rechargeOr', [ClientController::class, 'rechargeOr'])->middleware('auth');

Route::get('/usdt', [ClientController::class, 'usdt'])->middleware('auth');

Route::get('/barrage', [ClientController::class, 'barrage'])->middleware('auth');

Route::get('/MesBarrages', [ClientController::class, 'MesBarrages'])->middleware('auth');

Route::get('/ConfirmeAchat', [ClientController::class, 'ConfirmeAchat'])->middleware('auth');

Route::get('/retrait', [ClientController::class, 'retrait'])->middleware('auth');

Route::get('/retraitMtn_Or', [ClientController::class, 'retraitMtn_Or'])->middleware('auth');

Route::get('/MesRecharges', [ClientController::class, 'MesRecharges'])->middleware('auth');

Route::get('/MesRetraits', [ClientController::class, 'MesRetraits'])->middleware('auth');

Route::get('/moyen_ajouter/{id}', [ClientController::class, 'moyen_ajouter'])->middleware('auth');

Route::get('/retrait_ajouter', [ClientController::class, 'retrait_ajouter'])->middleware('auth');

Route::get('/video', [ClientController::class, 'video'])->middleware('auth');





//////////////////////////////////////traitements des donnees\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

Route::post('/register/createUser', [ClientController::class, 'createUser']);
Route::post('/singnin/conecter', [ClientController::class, 'connexion']);
Route::post('/recharger/choix', [ClientController::class, 'choixRecharge']);
Route::post('/recharger/choix/confirmOR', [ClientController::class, 'confirmOR']);
Route::post('/recharger/choix/confirmMTN', [ClientController::class, 'confirmMTN']);
Route::post('/recharger/choix/confirmUSDT', [ClientController::class, 'confirmUSDT'])->name('confirmUSDT');
Route::post('/retrait/moyen/{id}', [RetraitController::class, 'storeMoyenRetrait']);
Route::put('/retrait/addRetreait/{id}', [RetraitController::class, 'RetraitStore']);
Route::get('/deconnexion',[RetraitController::class,'deconnexion']);





