<?php

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\WahanaController;
use App\Http\Controllers\KritikSaranController;

Route::get('/', [Controller::class, 'index']);
Route::get('/wahana', [WahanaController::class, 'index']);
Route::get('/wahana/detail/{id}', [WahanaController::class, 'detail']);
Route::get('/galeri', [GaleriController::class, 'index']);
Route::get('/kritik-saran', [KritikSaranController::class, 'index']);
