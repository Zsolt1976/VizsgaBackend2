<?php

use App\Http\Controllers\ManufacturerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TypeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Összes adat lekérése a táblákból

Route::apiResource('products', ProductController::class)
    ->only(['index']);

Route::apiResource('types', TypeController::class)
    ->only(['index']);

Route::apiResource('manufacturers', ManufacturerController::class)
    ->only(['index']);

//Egy objektum adatainak lekérése a táblákból

Route::apiResource('products', ProductController::class)
    ->only(['index', 'show']);

Route::apiResource('types', TypeController::class)
    ->only(['index', 'show']);

Route::apiResource('manufacturers', ManufacturerController::class)
    ->only(['index', 'show']);

//Objektum létrehozása

Route::apiResource('products', ProductController::class)
    ->only(['index', 'store']);

Route::apiResource('types', TypeController::class)
    ->only(['index', 'store']);

Route::apiResource('manufacturers', ManufacturerController::class)
    ->only(['index', 'store']);
