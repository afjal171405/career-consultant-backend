<?php

namespace Modules\Customer\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use YajTech\Crud\Helper\RequestValidationHelper;
use Modules\Customer\Models\CustomerProfile;

class CustomerProfileCreateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
         $model = new CustomerProfile();

         return RequestValidationHelper::makeRules($model, 'create');
    }
}
