<?php

namespace modules\Customer\app\Http\Controllers;

use YajTech\Crud\Controllers\CrudController;
use modules\Customer\app\Models\EducationHistory;
use Modules\Customer\Http\Resources\EducationHistoryListResource;
use Modules\Customer\Http\Resources\EducationHistoryDetailResource;
use Modules\Customer\Http\Requests\EducationHistoryCreateRequest;
use Modules\Customer\Http\Requests\EducationHistoryUpdateRequest;

class EducationHistoryController extends CrudController
{
    public function __construct()
    {
        parent::__construct(
            EducationHistory::class,
            EducationHistoryDetailResource::class,
            EducationHistoryListResource::class,
            EducationHistoryCreateRequest::class,
            EducationHistoryUpdateRequest::class
        );
    }
}
