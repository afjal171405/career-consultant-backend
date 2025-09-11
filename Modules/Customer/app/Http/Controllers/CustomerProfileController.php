<?php

namespace modules\Customer\app\Http\Controllers;

use YajTech\Crud\Controllers\CrudController;
use modules\Customer\app\Models\CustomerProfile;
use Modules\Customer\Http\Resources\CustomerProfileListResource;
use Modules\Customer\Http\Resources\CustomerProfileDetailResource;
use Modules\Customer\Http\Requests\CustomerProfileCreateRequest;
use Modules\Customer\Http\Requests\CustomerProfileUpdateRequest;

class CustomerProfileController extends CrudController
{
    public function __construct()
    {
        parent::__construct(
            CustomerProfile::class,
            CustomerProfileDetailResource::class,
            CustomerProfileListResource::class,
            CustomerProfileCreateRequest::class,
            CustomerProfileUpdateRequest::class
        );
    }
}
