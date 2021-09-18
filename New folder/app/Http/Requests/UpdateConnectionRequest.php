<?php

namespace App\Http\Requests;

use App\Models\Connection;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateConnectionRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('connection_edit');
    }

    public function rules()
    {
        return [
            'database_url' => [
                'string',
                'nullable',
            ],
            'username' => [
                'string',
                'required',
            ],
            'password' => [
                'string',
                'required',
            ],
        ];
    }
}
