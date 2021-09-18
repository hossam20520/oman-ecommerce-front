<?php

namespace App\Http\Requests;

use App\Models\Filter;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreFilterRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('filter_create');
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
