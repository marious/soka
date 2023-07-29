<?php

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

use Illuminate\Support\Facades\Route;
use Modules\Players\Http\Controllers\Front\PlayersFrontController;
use Modules\Players\Http\Controllers\Front\PlayerVideoController;


Route::middleware(['auth', 'splade', 'verified'])->name('admin.')->group(function () {
    Route::get('admin/players', [\Modules\Players\Http\Controllers\PlayerController::class, 'index'])->name('players.index');
    Route::get('admin/players/api', [\Modules\Players\Http\Controllers\PlayerController::class, 'api'])->name('players.api');
    Route::get('admin/players/create', [\Modules\Players\Http\Controllers\PlayerController::class, 'create'])->name('players.create');
    Route::post('admin/players', [\Modules\Players\Http\Controllers\PlayerController::class, 'store'])->name('players.store');
    Route::get('admin/players/{model}', [\Modules\Players\Http\Controllers\PlayerController::class, 'show'])->name('players.show');
    Route::get('admin/players/{model}/edit', [\Modules\Players\Http\Controllers\PlayerController::class, 'edit'])->name('players.edit');
    Route::post('admin/players/{model}', [\Modules\Players\Http\Controllers\PlayerController::class, 'update'])->name('players.update');
    Route::delete('admin/players/{model}', [\Modules\Players\Http\Controllers\PlayerController::class, 'destroy'])->name('players.destroy');
});


Route::middleware(['splade', 'front'])->group(function () {
    Route::get('players', [PlayersFrontController::class, 'index'])->name('front.players');
    Route::get('players/api', [PlayersFrontController::class, 'api'])->name('front.players.api');
    Route::get('players/{player}/video', PlayerVideoController::class)->name('front.player.video');
    Route::get('players/{player}', [PlayersFrontController::class, 'show'])->name('front.players.show');
});
