<?php

namespace modules\Admin\app\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use modules\Admin\app\Models\Country;
use YajTech\Crud\Helper\RequestValidationHelper;

class CountryCreateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
         $model = new Country();

         return RequestValidationHelper::makeRules($model, 'create');
    }
}
