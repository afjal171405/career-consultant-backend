<?php

namespace Modules\Customer\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TestScoreDetailResource extends JsonResource
{
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
