<?php

namespace Modules\Admin\Http\Controllers;

use YajTech\Crud\Controllers\CrudController;
use Modules\Admin\Models\Office;
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
