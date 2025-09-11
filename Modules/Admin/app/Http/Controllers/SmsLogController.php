<?php

namespace modules\Admin\app\Http\Controllers;

use YajTech\Crud\Controllers\CrudController;
use modules\Admin\app\Models\SmsLog;
use Modules\Admin\Http\Resources\SmsLogListResource;
use Modules\Admin\Http\Resources\SmsLogDetailResource;
use Modules\Admin\Http\Requests\SmsLogCreateRequest;
use Modules\Admin\Http\Requests\SmsLogUpdateRequest;

class SmsLogController extends CrudController
{
    public function __construct()
    {
        parent::__construct(
            SmsLog::class,
            SmsLogDetailResource::class,
            SmsLogListResource::class,
            SmsLogCreateRequest::class,
            SmsLogUpdateRequest::class
        );
    }
}
