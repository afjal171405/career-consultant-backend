<?php

namespace modules\Admin\app\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use modules\Admin\app\Models\City;
use YajTech\Crud\Helper\ResourceHelper;

class CityListResource extends JsonResource
{
    public function toArray($request)
    {
        $model = new City();

        return ResourceHelper::makeResource($model, $this);
    }
}
