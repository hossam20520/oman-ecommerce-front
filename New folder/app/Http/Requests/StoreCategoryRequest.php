<?php

namespace App\Http\Requests;

use App\Models\Category;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreCategoryRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('category_create');
    }

    public function rules()
    {
        return [
            'category' => [
                'string',
                'nullable',
            ],
            'category_name_ar' => [
                'string',
                'required',
            ],
            'image' => [
                'required',
            ],
        ];
    }
}
