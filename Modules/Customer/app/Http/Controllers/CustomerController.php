<?php

namespace Modules\Admin\Http\Controllers;

use Modules\Admin\Http\Requests\CustomerUpdateRequest;
use Modules\Admin\Http\Resources\CustomerDetailResource;
use Modules\Admin\Http\Resources\CustomerListResource;
use Modules\Admin\Models\Customer;
use modules\Customer\app\Http\Requests\CustomerCreateRequest;
use YajTech\Crud\Controllers\CrudController;

class CustomerController extends CrudController
{
    public function __construct()
    {
        parent::__construct(
            Customer::class,
            CustomerDetailResource::class,
            CustomerListResource::class,
            CustomerCreateRequest::class,
            CustomerUpdateRequest::class
        );
    }
}
