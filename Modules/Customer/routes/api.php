<?php

use Illuminate\Support\Facades\Route;

Route::prefix('web')->group(function ()
{
    Route::post('login', [\modules\Customer\app\Http\Controllers\auth\AuthController::class,'login']);

    Route::middleware('auth:customer')->group(function () {
        Route::get('profile', [\modules\Customer\app\Http\Controllers\auth\AuthController::class, 'getProfile']);
        Route::post('register', [\modules\Customer\app\Http\Controllers\auth\AuthController::class, 'register']);
    });
});

YajTech\Crud\Helper\CrudRoute::generateRoutes('customerprofile', \modules\Customer\app\Http\Controllers\CustomerProfileController::class);
YajTech\Crud\Helper\CrudRoute::generateRoutes('educationhistory', \modules\Customer\app\Http\Controllers\EducationHistoryController::class);
YajTech\Crud\Helper\CrudRoute::generateRoutes('testscore', \modules\Customer\app\Http\Controllers\TestScoreController::class);
YajTech\Crud\Helper\CrudRoute::generateRoutes('financialprofile', \modules\Customer\app\Http\Controllers\FinancialProfileController::class);
