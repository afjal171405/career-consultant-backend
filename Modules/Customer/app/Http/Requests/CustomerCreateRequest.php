<?php

namespace modules\Customer\app\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Modules\Admin\Models\Customer;
use YajTech\Crud\Helper\RequestValidationHelper;

class CustomerCreateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
         $model = new Customer();

         return RequestValidationHelper::makeRules($model, 'create');
    }
}
