<?php

namespace modules\Admin\app\Http\Controllers;

use modules\Admin\app\Http\Requests\CountryCreateRequest;
use modules\Admin\app\Http\Resources\CountryDetailResource;
use modules\Admin\app\Http\Resources\CountryListResource;
use modules\Admin\app\Models\Country;
use modules\Customer\app\Http\Requests\CountryUpdateRequest;
use YajTech\Crud\Controllers\CrudController;

class CountryController extends CrudController
{
    public function __construct()
    {
        parent::__construct(
            Country::class,
            CountryDetailResource::class,
            CountryListResource::class,
            CountryCreateRequest::class,
            CountryUpdateRequest::class
        );
    }
}
