<?php

namespace modules\Admin\app\Http\Controllers;

use modules\Admin\app\Models\Office;
use YajTech\Crud\Controllers\CrudController;
use Modules\Admin\Http\Resources\OfficeListResource;
use Modules\Admin\Http\Resources\OfficeDetailResource;
use Modules\Admin\Http\Requests\OfficeCreateRequest;
use Modules\Admin\Http\Requests\OfficeUpdateRequest;

class OfficeController extends CrudController
{
    public function __construct()
    {
        parent::__construct(
            Office::class,
            OfficeDetailResource::class,
            OfficeListResource::class,
            OfficeCreateRequest::class,
            OfficeUpdateRequest::class
        );
    }
}
