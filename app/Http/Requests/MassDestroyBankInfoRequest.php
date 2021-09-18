<?php

namespace App\Http\Requests;

use App\Models\BankInfo;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyBankInfoRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('bank_info_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:bank_infos,id',
        ];
    }
}
