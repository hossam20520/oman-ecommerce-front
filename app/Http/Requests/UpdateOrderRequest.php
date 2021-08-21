<?php

namespace App\Http\Requests;

use App\Models\Order;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateOrderRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('order_edit');
    }

    public function rules()
    {
        return [
            'fname' => [
                'string',
                
            ],
            'lname' => [
                'string',
               
            ],
            'group' => [
                
            ],
            'username' => [
                'string',
              
            ],
            'email' => [
              
            ],
            'orderid' => [
                'string',
                'nullable',
            ],
            'payment' => [
                'string',
                'nullable',
            ],
            'status' => [
               
            ],
            'street_1' => [
                'string',
                'nullable',
            ],
            'city' => [
                'string',
                'nullable',
            ],
            'state' => [
                'string',
                'nullable',
            ],
            'country' => [
                'string',
                'nullable',
            ],
            'zip' => [
                'string',
                'nullable',
            ],
            'phone' => [
                'string',
                'nullable',
            ],
            'date' => [
                'string',
                
            ],
        ];
    }
}
