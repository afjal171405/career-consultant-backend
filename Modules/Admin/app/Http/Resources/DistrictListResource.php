<?php

namespace modules\Admin\app\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use modules\Admin\app\Models\District;
use YajTech\Crud\Helper\ResourceHelper;

class DistrictListResource extends JsonResource
{
    public function toArray($request)
    {
        $model = new District();

        return ResourceHelper::makeResource($model, $this);
    }
}
