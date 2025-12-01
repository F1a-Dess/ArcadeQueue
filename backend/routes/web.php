<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\QueueController;
use App\Http\Controllers\Api\CabinetController;

Route::get('/', function () {
    return view('Main Page');
});

// // Queue routes
// Route::get('/queue', [QueueController::class, 'index']);
// Route::post('/queue', [QueueController::class, 'store']);
// Route::delete('/queue/{id}', [QueueController::class, 'destroy']);
// Route::post('/queue/{id}/cycle', [QueueController::class, 'cycle']);

// // Cabinet routes
// Route::get('/cabinets', [CabinetController::class, 'index']);
// Route::post('/cabinets', [CabinetController::class, 'store']);
// Route::delete('/cabinets/{id}', [CabinetController::class, 'destroy']);
// Route::post('/cabinets/{id}', [CabinetController::class, 'update']);