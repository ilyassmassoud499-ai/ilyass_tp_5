<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnnonceController;

Route::resource('annonces', AnnonceController::class);