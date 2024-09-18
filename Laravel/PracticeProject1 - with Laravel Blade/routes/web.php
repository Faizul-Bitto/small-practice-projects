<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BladePracticeController;

Route::get( '/', [BladePracticeController::class, 'home'] );
