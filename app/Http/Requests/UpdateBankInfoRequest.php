<?php

namespace App\Http\Requests;

use App\Models\BankInfo;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateBankInfoRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('bank_info_edit');
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
