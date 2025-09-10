<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

YajTech\Crud\Helper\CrudRoute::generateRoutes('province', \modules\Admin\app\Http\Controllers\ProvinceController::class);
YajTech\Crud\Helper\CrudRoute::generateRoutes('district', \modules\Admin\app\Http\Controllers\DistrictController::class);
YajTech\Crud\Helper\CrudRoute::generateRoutes('city', \modules\Admin\app\Http\Controllers\CityController::class);
YajTech\Crud\Helper\CrudRoute::generateRoutes('country', \modules\Admin\app\Http\Controllers\CountryController::class);
