<?php

namespace Modules\Customer\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Modules\Customer\Models\EducationHistory;
use YajTech\Crud\Helper\ResourceHelper;

class EducationHistoryListResource extends JsonResource
{
    public function toArray($request)
    {
        $model = new EducationHistory();

        return ResourceHelper::makeResource($model, $this);
    }
}
