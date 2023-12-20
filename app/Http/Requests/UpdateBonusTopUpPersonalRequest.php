<?php

namespace App\Http\Requests;

use App\Models\BonusTopUpPersonal;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateBonusTopUpPersonalRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('bonus_top_up_personal_edit');
    }

    public function rules()
    {
        return [
            'point_package_id' => [
                'required',
                'integer',
                'exists:point_packages,id'
            ],
            'first_upline_bonus' => [
                'numeric',
                'required',
                'between:0,9999999999999.99'
            ],
            'second_upline_bonus' => [
                'numeric',
                'required',
                'between:0,9999999999999.99'
            ],
        ];
    }
}
