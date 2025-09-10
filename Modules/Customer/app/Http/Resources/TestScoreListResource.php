<?php

namespace Modules\Customer\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Modules\Customer\Models\TestScore;
use YajTech\Crud\Helper\ResourceHelper;

class TestScoreListResource extends JsonResource
{
    public function toArray($request)
    {
        $model = new TestScore();

        return ResourceHelper::makeResource($model, $this);
    }
}
