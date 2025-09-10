<?php

namespace modules\Admin\app\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use modules\Admin\app\Models\Province;
use YajTech\Crud\Helper\ResourceHelper;

class ProvinceListResource extends JsonResource
{
    public function toArray($request)
    {
        $model = new Province();

        return ResourceHelper::makeResource($model, $this);
    }
}
