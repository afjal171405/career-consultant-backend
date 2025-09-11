<?php

use Illuminate\Support\Facades\Route;

//Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
//    Route::apiResource('admins', AdminController::class)->names('admin');
//});

YajTech\Crud\Helper\CrudRoute::generateRoutes('office', \modules\Admin\app\Http\Controllers\OfficeController::class);
YajTech\Crud\Helper\CrudRoute::generateRoutes('customer', \modules\Customer\app\Http\Controllers\CustomerController::class);
YajTech\Crud\Helper\CrudRoute::generateRoutes('smslog', \modules\Admin\app\Http\Controllers\SmsLogController::class);
