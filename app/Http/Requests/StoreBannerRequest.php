<?php

namespace App\Http\Requests;

use App\Models\Banner;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreBannerRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('banner_create');
    }

    public function rules()
    {
        return [
            'photo' => [
                'required',
            ],
            'language_id' => [
                'required',
                'integer',
                'exists:languages,id'
            ],
            'status' => [
                'required',
                'max:125',
            ],
        ];
    }
}
