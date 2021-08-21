<?php

namespace App\Http\Requests;

use App\Models\Client;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreClientRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('client_create');
    }

    public function rules()
    {
        return [
            'fname' => [
                'string',
                'required',
            ],
            'lname' => [
                'string',
                'required',
            ],
            'email' => [
                'string',
                'required',
                'unique:clients',
            ],
            'role' => [
                'required',
            ],
            'phone' => [
                'string',
                'required',
                'unique:clients',
            ],
            'password' => [
                'string',
                'required',
            ],
            'company' => [
                'string',
                'nullable',
            ],
            'crn' => [
                'string',
                'nullable',
            ],
        ];
    }
}
