<?php

namespace modules\Admin\app\Http\Controllers;

use modules\Admin\app\Http\Requests\DistrictCreateRequest;
use modules\Admin\app\Http\Requests\DistrictUpdateRequest;
use modules\Admin\app\Http\Resources\DistrictDetailResource;
use modules\Admin\app\Http\Resources\DistrictListResource;
use modules\Admin\app\Models\District;
use YajTech\Crud\Controllers\CrudController;

class DistrictController extends CrudController
{
    public function __construct()
    {
        parent::__construct(
            District::class,
            DistrictDetailResource::class,
            DistrictListResource::class,
            DistrictCreateRequest::class,
            DistrictUpdateRequest::class
        );
    }
}
