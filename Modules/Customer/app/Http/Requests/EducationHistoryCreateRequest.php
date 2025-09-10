<?php

namespace Modules\Customer\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use YajTech\Crud\Helper\RequestValidationHelper;
use Modules\Customer\Models\EducationHistory;

class EducationHistoryCreateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
         $model = new EducationHistory();

         return RequestValidationHelper::makeRules($model, 'create');
    }
}
