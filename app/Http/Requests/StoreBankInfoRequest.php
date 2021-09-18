<?php

namespace App\Http\Requests;

use App\Models\BankInfo;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreBankInfoRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('bank_info_create');
    }

    public function rules()
    {
        return [
            'bankname' => [
                'string',
                'nullable',
            ],
            'bank_number' => [
                'string',
                'nullable',
            ],
        ];
    }
}
