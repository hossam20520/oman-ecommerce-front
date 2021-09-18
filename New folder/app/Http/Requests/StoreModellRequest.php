<?php

namespace App\Http\Requests;

use App\Models\Modell;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreModellRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('modell_create');
    }

    public function rules()
    {
        return [
            'model' => [
                'string',
                'required',
                'unique:modells',
            ],
        ];
    }
}
