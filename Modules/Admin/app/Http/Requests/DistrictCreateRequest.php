<?php

namespace modules\Admin\app\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use modules\Admin\app\Models\District;
use YajTech\Crud\Helper\RequestValidationHelper;

class DistrictCreateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
         $model = new District();

         return RequestValidationHelper::makeRules($model, 'create');
    }
}
