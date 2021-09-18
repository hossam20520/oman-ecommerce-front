<?php

namespace App\Http\Requests;

use App\Models\Make;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateMakeRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('make_edit');
    }

    public function rules()
    {
        return [
            'make' => [
                'string',
                'required',
                'unique:makes,make,' . request()->route('make')->id,
            ],
        ];
    }
}
