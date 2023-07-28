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

Route::prefix('teams')->group(function() {
    Route::get('/', 'TeamsController@index');
});

Route::middleware(['auth', 'splade', 'verified'])->name('admin.')->group(function () {
    Route::get('admin/teams', [\Modules\Teams\Http\Controllers\TeamController::class, 'index'])->name('teams.index');
    Route::get('admin/teams/api', [\Modules\Teams\Http\Controllers\TeamController::class, 'api'])->name('teams.api');
    Route::get('admin/teams/create', [\Modules\Teams\Http\Controllers\TeamController::class, 'create'])->name('teams.create');
    Route::post('admin/teams', [\Modules\Teams\Http\Controllers\TeamController::class, 'store'])->name('teams.store');
    Route::get('admin/teams/{model}', [\Modules\Teams\Http\Controllers\TeamController::class, 'show'])->name('teams.show');
    Route::get('admin/teams/{model}/edit', [\Modules\Teams\Http\Controllers\TeamController::class, 'edit'])->name('teams.edit');
    Route::post('admin/teams/{model}', [\Modules\Teams\Http\Controllers\TeamController::class, 'update'])->name('teams.update');
    Route::delete('admin/teams/{model}', [\Modules\Teams\Http\Controllers\TeamController::class, 'destroy'])->name('teams.destroy');
});
