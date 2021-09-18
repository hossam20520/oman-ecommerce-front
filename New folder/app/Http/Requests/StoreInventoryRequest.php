<?php

namespace App\Http\Requests;

use App\Models\Inventory;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreInventoryRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('inventory_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'name_ar' => [
                'string',
                'required',
            ],
            'sku' => [
                'string',
                'nullable',
            ],
            'price' => [
                'required',
            ],
            'inventory' => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'full_desc_ar' => [
                'required',
            ],
            'short_desc_ar' => [
                'required',
            ],
            'image' => [
                'required',
            ],
            'gallery.*' => [
                'required',
            ],
            'brand' => [
                'string',
                'nullable',
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
            'price_group_1' => [
                'required',
            ],
            'price_group_2' => [
                'required',
            ],
            'price_group_3' => [
                'required',
            ],
            'price_group_4' => [
                'required',
            ],
            'price_group_5' => [
                'required',
            ],
            'price_group_6' => [
                'required',
            ],
            'product_unit_wholse' => [
                'required',
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
            'sale' => [
                'required',
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
