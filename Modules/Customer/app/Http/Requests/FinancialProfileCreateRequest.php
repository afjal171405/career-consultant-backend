<?php

namespace Modules\Customer\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use YajTech\Crud\Helper\RequestValidationHelper;
use Modules\Customer\Models\FinancialProfile;

class FinancialProfileCreateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
         $model = new FinancialProfile();

         return RequestValidationHelper::makeRules($model, 'create');
    }
}
