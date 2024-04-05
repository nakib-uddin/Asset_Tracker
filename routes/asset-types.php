<?php
use App\Http\Controllers\AssetTypeController;
use Illuminate\Support\Facades\Route;

Route::resource('asset-types', AssetTypeController::class)->names([
    'index' => 'asset-types.index',
    'create' => 'asset-types.create',
    'store' => 'asset-types.store',
    'show' => 'asset-types.show',
    'edit' => 'asset-types.edit',
    'update' => 'asset-types.update',
    'destroy' => 'asset-types.destroy',
]);
