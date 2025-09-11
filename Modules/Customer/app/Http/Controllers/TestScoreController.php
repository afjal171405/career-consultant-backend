<?php

namespace modules\Customer\app\Http\Controllers;

use YajTech\Crud\Controllers\CrudController;
use modules\Customer\app\Models\TestScore;
use Modules\Customer\Http\Resources\TestScoreListResource;
use Modules\Customer\Http\Resources\TestScoreDetailResource;
use Modules\Customer\Http\Requests\TestScoreCreateRequest;
use Modules\Customer\Http\Requests\TestScoreUpdateRequest;

class TestScoreController extends CrudController
{
    public function __construct()
    {
        parent::__construct(
            TestScore::class,
            TestScoreDetailResource::class,
            TestScoreListResource::class,
            TestScoreCreateRequest::class,
            TestScoreUpdateRequest::class
        );
    }
}
