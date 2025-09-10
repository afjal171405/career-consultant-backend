<?php

namespace modules\Admin\app\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use modules\Admin\app\Models\Province;
use YajTech\Crud\Helper\RequestValidationHelper;

class ProvinceCreateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
         $model = new Province();

         return RequestValidationHelper::makeRules($model, 'create');
    }
}
