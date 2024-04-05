<?php
use App\Http\Controllers\AssetController;
use Illuminate\Support\Facades\Route;


Route::resource('assets', AssetController::class)->names([
    'index' => 'assets.index',
    'create' => 'assets.create',
    'store' => 'assets.store',
    'show' => 'assets.show',
    'edit' => 'assets.edit',
    'update' => 'assets.update',
    'destroy' => 'assets.destroy',
]);

Route::get('/assets/export/{format?}', [AssetController::class, 'export'])->name('assets.export');
Route::get('/assets/filter', [AssetController::class, 'filter'])->name('assets.filter');

