<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'homepage']);
Route::get('/chi-siamo', [PageController::class, 'about']);
Route::get('/servizi', [PageController::class, 'services']);
Route::get('/servizi/{service}', [PageController::class, 'service']);
