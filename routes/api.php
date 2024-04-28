<?php

use App\Http\Controllers\ManufacturerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TypeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
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
    ->only(['index', 'store'])
    ->missing(function (Request $request){
        return Response::json([
            'data' => null,
            'succes' => false,
            'message' => 'Product not exists',
        ], 404);
    });

Route::apiResource('types', TypeController::class)
    ->only(['index', 'store'])
    ->missing(function (Request $request){
        return Response::json([
            'data' => null,
            'succes' => false,
            'message' => 'Type not exists',
        ], 404);
    });

Route::apiResource('manufacturers', ManufacturerController::class)
    ->only(['index', 'store'])
    ->missing(function (Request $request){
        return Response::json([
            'data' => null,
            'succes' => false,
            'message' => 'Manufacturer not exists',
        ], 404);
    });
