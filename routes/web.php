<?php

use App\Http\Controllers\ConfessionController;
use Illuminate\Support\Facades\Route;


Route::resource('confession', ConfessionController::class);

