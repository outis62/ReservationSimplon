<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationController;
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

Route::get('/', [HomeController::class, 'login'])->name('login');
Route::get('/dashboard', function () {
    return view('template');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth:apprenant'])->group(function () {
    // Routes pour les apprenants connectés
    Route::get('/apprenant/dashboard', function () {
        return view('apprenant.dashboard');
    })->name('apprenant.dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
Route::get('/listeapprenant', [HomeController::class, 'listeapprenant'])->name('listeapprenant');
Route::get('inscriptioncours', [HomeController::class, 'inscriptioncours'])->name('inscriptioncours');
// Route::get('/apprenants/approuvee/{inscriptioncours}', [HomeController::class, 'approuvee'])->name('inscriptioncours.approuvee');
// Route::get('/apprenants/attente/{inscriptioncours}', [HomeController::class, 'attente'])->name('inscriptioncours.attente');
Route::get('/apprenants/activate/{apprenant}', [HomeController::class, 'activate'])->name('apprenants.activate');
Route::get('/apprenants/deactivate/{apprenant}', [HomeController::class, 'deactivate'])->name('apprenants.deactivate');

Route::get('/valider-inscription/{apprenantId}', [HomeController::class, 'validerInscription'])->name('valider_inscription');

Route::get('/listereservation', [ReservationController::class, 'listereservation'])->name('listereservation');
Route::get('reservationcours', [ReservationController::class, 'reservationcours'])->name('reservationcours');
Route::get('/reservations/{id}/activate', [ReservationController::class, 'activate'])->name('reservations.activate');
Route::get('/reservations/{id}/deactivate', [ReservationController::class, 'deactivate'])->name('reservations.deactivate');
