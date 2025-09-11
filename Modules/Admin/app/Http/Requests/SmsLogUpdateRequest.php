<?php

namespace Modules\Admin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use YajTech\Crud\Helper\RequestValidationHelper;
use Modules\Admin\Models\SmsLog;

class SmsLogUpdateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
         $model = new SmsLog();

         return RequestValidationHelper::makeRules($model, 'update');
    }
}
