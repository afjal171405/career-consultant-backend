<?php

namespace modules\Admin\app\Http\Controllers;

use modules\Admin\app\Http\Requests\CityCreateRequest;
use modules\Admin\app\Http\Requests\CityUpdateRequest;
use modules\Admin\app\Http\Resources\CityDetailResource;
use modules\Admin\app\Http\Resources\CityListResource;
use modules\Admin\app\Models\City;
use YajTech\Crud\Controllers\CrudController;

class CityController extends CrudController
{
    public function __construct()
    {
        parent::__construct(
            City::class,
            CityDetailResource::class,
            CityListResource::class,
            CityCreateRequest::class,
            CityUpdateRequest::class
        );
    }
}
