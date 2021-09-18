<?php

namespace App\Http\Requests;

use App\Models\Client;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateClientRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('client_edit');
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
                'unique:clients,email,' . request()->route('client')->id,
            ],
            'role' => [
                'required',
            ],
            'phone' => [
                'string',
                'required',
                'unique:clients,phone,' . request()->route('client')->id,
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
