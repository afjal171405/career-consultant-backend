<?php

namespace Modules\Customer\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Modules\Customer\Models\CustomerProfile;
use YajTech\Crud\Helper\ResourceHelper;

class CustomerProfileListResource extends JsonResource
{
    public function toArray($request)
    {
        $model = new CustomerProfile();

        return ResourceHelper::makeResource($model, $this);
    }
}
