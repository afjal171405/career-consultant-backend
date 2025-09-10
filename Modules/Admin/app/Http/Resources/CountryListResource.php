<?php

namespace modules\Admin\app\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use modules\Admin\app\Models\Country;
use YajTech\Crud\Helper\ResourceHelper;

class CountryListResource extends JsonResource
{
    public function toArray($request)
    {
        $model = new Country();

        return ResourceHelper::makeResource($model, $this);
    }
}
