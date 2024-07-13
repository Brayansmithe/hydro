<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

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

/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/choix', function ()  {
    return view('/client/choix');
});*/

//route::get("/choix", [ClientController::class, "end"]);

route::get("/registration", [ClientController::class, "register"]);

route::get("/", [ClientController::class, "choix"]);

route::get("/compte", [ClientController::class, "compte"]);


// Route Kevin

Route::get('/signin', [ClientController::class, 'signin'])->name('login');

Route::get('/acceuil', [ClientController::class, 'acceuil'])->name('acceuil')->middleware('auth');

Route::get('/inviter', [ClientController::class, 'inviter']);

Route::get('/recharger', [ClientController::class, 'recharger']);

Route::get('/rechargeMtn', [ClientController::class, 'rechargeMtn']);

Route::get('/rechargeOr', [ClientController::class, 'rechargeOr']);

Route::get('/usdt', [ClientController::class, 'usdt']);

Route::get('/barrage', [ClientController::class, 'barrage']);

Route::get('/MesBarrages', [ClientController::class, 'MesBarrages']);

Route::get('/ConfirmeAchat', [ClientController::class, 'ConfirmeAchat']);

Route::get('/retrait', [ClientController::class, 'retrait']);

Route::get('/retraitMtn_Or', [ClientController::class, 'retraitMtn_Or']);

Route::get('/MesRecharges', [ClientController::class, 'MesRecharges']);

Route::get('/MesRetraits', [ClientController::class, 'MesRetraits']);

Route::get('/moyen_ajouter', [ClientController::class, 'moyen_ajouter']);

Route::get('/retrait_ajouter', [ClientController::class, 'retrait_ajouter']);

Route::get('/video', [ClientController::class, 'video']);





//////////////////////////////////////traitements des donnees\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

Route::post('/register/createUser', [ClientController::class, 'createUser']);
Route::post('/singnin/conecter', [ClientController::class, 'connexion']);
Route::post('/recharger/choix', [ClientController::class, 'choixRecharge']);
Route::post('/recharger/choix/confirmOR', [ClientController::class, 'confirmOR']);
Route::post('/recharger/choix/confirmMTN', [ClientController::class, 'confirmMTN']);
Route::post('/recharger/choix/confirmUSDT', [ClientController::class, 'confirmUSDT']);





