<?php

namespace modules\Customer\app\Http\Controllers;

use YajTech\Crud\Controllers\CrudController;
use modules\Customer\app\Models\FinancialProfile;
use Modules\Customer\Http\Resources\FinancialProfileListResource;
use Modules\Customer\Http\Resources\FinancialProfileDetailResource;
use Modules\Customer\Http\Requests\FinancialProfileCreateRequest;
use Modules\Customer\Http\Requests\FinancialProfileUpdateRequest;

class FinancialProfileController extends CrudController
{
    public function __construct()
    {
        parent::__construct(
            FinancialProfile::class,
            FinancialProfileDetailResource::class,
            FinancialProfileListResource::class,
            FinancialProfileCreateRequest::class,
            FinancialProfileUpdateRequest::class
        );
    }
}
