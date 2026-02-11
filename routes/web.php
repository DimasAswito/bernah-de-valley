<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Controller;

Route::get('/', [Controller::class, 'index']);
