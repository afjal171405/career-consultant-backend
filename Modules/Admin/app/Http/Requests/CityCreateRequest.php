<?php

namespace modules\Admin\app\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use modules\Admin\app\Models\City;
use YajTech\Crud\Helper\RequestValidationHelper;

class CityCreateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
         $model = new City();

         return RequestValidationHelper::makeRules($model, 'create');
    }
}
