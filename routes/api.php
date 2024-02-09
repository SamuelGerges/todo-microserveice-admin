<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;


Route::apiResource('products',ProductController::class);
Route::get('get-user-random',[UserController::class,'random']);
