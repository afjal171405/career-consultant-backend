<?php

use Illuminate\Support\Facades\Route;

Route::prefix('web')->group(function ()
{
    Route::post('login', [\modules\Customer\app\Http\Controllers\auth\AuthController::class,'login']);
});

YajTech\Crud\Helper\CrudRoute::generateRoutes('customerprofile', \modules\Customer\app\Http\Controllers\CustomerProfileController::class);
YajTech\Crud\Helper\CrudRoute::generateRoutes('educationhistory', \modules\Customer\app\Http\Controllers\EducationHistoryController::class);
YajTech\Crud\Helper\CrudRoute::generateRoutes('testscore', \modules\Customer\app\Http\Controllers\TestScoreController::class);
YajTech\Crud\Helper\CrudRoute::generateRoutes('financialprofile', \modules\Customer\app\Http\Controllers\FinancialProfileController::class);
