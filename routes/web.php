<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\KritikSaranController;
use App\Http\Controllers\WahanaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [Controller::class, 'index']);
Route::get('/wahana', [WahanaController::class, 'index']);
Route::get('/wahana/detail/{id}', [WahanaController::class, 'detail']);
Route::get('/galeri', [GaleriController::class, 'index']);
Route::get('/kritik-saran', [KritikSaranController::class, 'index']);
