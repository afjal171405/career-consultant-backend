<?php

namespace modules\Admin\app\Http\Controllers;

use modules\Admin\app\Http\Requests\ProvinceCreateRequest;
use modules\Admin\app\Http\Requests\ProvinceUpdateRequest;
use modules\Admin\app\Http\Resources\ProvinceDetailResource;
use modules\Admin\app\Http\Resources\ProvinceListResource;
use modules\Admin\app\Models\Province;
use YajTech\Crud\Controllers\CrudController;

class ProvinceController extends CrudController
{
    public function __construct()
    {
        parent::__construct(
            Province::class,
            ProvinceDetailResource::class,
            ProvinceListResource::class,
            ProvinceCreateRequest::class,
            ProvinceUpdateRequest::class
        );
    }
}
