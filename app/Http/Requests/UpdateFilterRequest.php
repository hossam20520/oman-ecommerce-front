<?php

namespace App\Http\Requests;

use App\Models\Filter;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateFilterRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('filter_edit');
    }

    public function rules()
    {
        return [
            'brand' => [
                'string',
                'required',
            ],
            'model' => [
                'string',
                'required',
            ],
            'type' => [
                'string',
                'required',
            ],
            'resutls' => [
                'required',
            ],
        ];
    }
}
