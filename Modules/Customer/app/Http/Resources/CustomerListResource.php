<?php

namespace Modules\Admin\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Modules\Admin\Models\Customer;
use YajTech\Crud\Helper\ResourceHelper;

class CustomerListResource extends JsonResource
{
    public function toArray($request)
    {
        $model = new Customer();

        return ResourceHelper::makeResource($model, $this);
    }
}
