<?php

use Illuminate\Support\Facades\Route;
use Modules\Customer\Http\Controllers\CustomerController;

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('customers', CustomerController::class)->names('customer');
});

YajTech\Crud\Helper\CrudRoute::generateRoutes('customerprofile', Modules\Customer\Http\Controllers\CustomerProfileController::class);
YajTech\Crud\Helper\CrudRoute::generateRoutes('educationhistory', Modules\Customer\Http\Controllers\EducationHistoryController::class);
YajTech\Crud\Helper\CrudRoute::generateRoutes('testscore', Modules\Customer\Http\Controllers\TestScoreController::class);
YajTech\Crud\Helper\CrudRoute::generateRoutes('financialprofile', Modules\Customer\Http\Controllers\FinancialProfileController::class);