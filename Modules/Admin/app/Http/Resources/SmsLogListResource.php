<?php

namespace Modules\Admin\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Modules\Admin\Models\SmsLog;
use YajTech\Crud\Helper\ResourceHelper;

class SmsLogListResource extends JsonResource
{
    public function toArray($request)
    {
        $model = new SmsLog();

        return ResourceHelper::makeResource($model, $this);
    }
}
