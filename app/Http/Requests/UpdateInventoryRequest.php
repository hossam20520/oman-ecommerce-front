<?php

namespace App\Http\Requests;

use App\Models\Inventory;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateInventoryRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('inventory_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'nullable',
            ],
            'sku' => [
                'string',
                'nullable',
            ],
            'inventory' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'product_unit' => [
                'required',
            ],
            'box_quantity' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'unit_qty' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'items_per_unit' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'start_sale_date_time' => [
                'date_format:' . config('panel.date_format') . ' ' . config('panel.time_format'),
                'nullable',
            ],
            'end_sale_date_time' => [
                'date_format:' . config('panel.date_format') . ' ' . config('panel.time_format'),
                'nullable',
            ],
            'youtube_link' => [
                'string',
                'nullable',
            ],
        ];
    }
}
