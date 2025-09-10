<?php

namespace Modules\Customer\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use YajTech\Crud\Helper\RequestValidationHelper;
use Modules\Customer\Models\TestScore;

class TestScoreCreateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
         $model = new TestScore();

         return RequestValidationHelper::makeRules($model, 'create');
    }
}
