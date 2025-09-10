<?php

use Illuminate\Support\Facades\Route;
use Modules\Admin\Http\Controllers\AdminController;

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('admins', AdminController::class)->names('admin');
});

YajTech\Crud\Helper\CrudRoute::generateRoutes('office', Modules\Admin\Http\Controllers\OfficeController::class);
YajTech\Crud\Helper\CrudRoute::generateRoutes('customer', Modules\Admin\Http\Controllers\CustomerController::class);