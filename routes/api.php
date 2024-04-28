<?php

use App\Http\Controllers\ManufacturerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TypeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('products', ProductController::class)
    ->only(['index']);

Route::apiResource('type', TypeController::class)
    ->only(['index']);

Route::apiResource('manufacturer', ManufacturerController::class)
    ->only(['index']);
