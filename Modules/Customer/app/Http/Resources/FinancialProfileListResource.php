<?php

namespace Modules\Customer\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Modules\Customer\Models\FinancialProfile;
use YajTech\Crud\Helper\ResourceHelper;

class FinancialProfileListResource extends JsonResource
{
    public function toArray($request)
    {
        $model = new FinancialProfile();

        return ResourceHelper::makeResource($model, $this);
    }
}
