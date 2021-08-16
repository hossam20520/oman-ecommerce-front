<?php

namespace App\Http\Requests;

use App\Models\Group;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreGroupRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('group_create');
    }

    public function rules()
    {
        return [
            'users.*' => [
                'integer',
            ],
            'users' => [
                'required',
                'array',
            ],
        ];
    }
}
