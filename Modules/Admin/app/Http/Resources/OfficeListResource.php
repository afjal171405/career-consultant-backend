<?php

namespace Modules\Admin\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Modules\Admin\Models\Office;
use YajTech\Crud\Helper\ResourceHelper;

class OfficeListResource extends JsonResource
{
    public function toArray($request)
    {
        $model = new Office();

        return ResourceHelper::makeResource($model, $this);
    }
}
