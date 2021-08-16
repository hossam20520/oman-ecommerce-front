@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.inventory.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.inventories.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.inventory.fields.id') }}
                        </th>
                        <td>
                            {{ $inventory->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.inventory.fields.name') }}
                        </th>
                        <td>
                            {{ $inventory->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.inventory.fields.sku') }}
                        </th>
                        <td>
                            {{ $inventory->sku }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.inventory.fields.price') }}
                        </th>
                        <td>
                            {{ $inventory->price }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.inventory.fields.inventory') }}
                        </th>
                        <td>
                            {{ $inventory->inventory }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.inventory.fields.desc') }}
                        </th>
                        <td>
                            {{ $inventory->desc }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.inventory.fields.short_desc') }}
                        </th>
                        <td>
                            {{ $inventory->short_desc }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.inventory.fields.image') }}
                        </th>
                        <td>
                            @if($inventory->image)
                                <a href="{{ $inventory->image->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $inventory->image->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.inventory.fields.gallery') }}
                        </th>
                        <td>
                            @foreach($inventory->gallery as $key => $media)
                                <a href="{{ $media->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $media->getUrl('thumb') }}">
                                </a>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.inventory.fields.category') }}
                        </th>
                        <td>
                            {{ $inventory->category->category ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.inventory.fields.brand') }}
                        </th>
                        <td>
                            {{ $inventory->brand }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.inventory.fields.product_unit') }}
                        </th>
                        <td>
                            {{ App\Models\Inventory::PRODUCT_UNIT_SELECT[$inventory->product_unit] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.inventory.fields.box_quantity') }}
                        </th>
                        <td>
                            {{ $inventory->box_quantity }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.inventory.fields.product_cost') }}
                        </th>
                        <td>
                            {{ $inventory->product_cost }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.inventory.fields.price_group_1') }}
                        </th>
                        <td>
                            {{ $inventory->price_group_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.inventory.fields.price_group_2') }}
                        </th>
                        <td>
                            {{ $inventory->price_group_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.inventory.fields.price_group_3') }}
                        </th>
                        <td>
                            {{ $inventory->price_group_3 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.inventory.fields.price_group_4') }}
                        </th>
                        <td>
                            {{ $inventory->price_group_4 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.inventory.fields.price_group_5') }}
                        </th>
                        <td>
                            {{ $inventory->price_group_5 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.inventory.fields.price_group_6') }}
                        </th>
                        <td>
                            {{ $inventory->price_group_6 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.inventory.fields.product_unit_wholse') }}
                        </th>
                        <td>
                            {{ App\Models\Inventory::PRODUCT_UNIT_WHOLSE_SELECT[$inventory->product_unit_wholse] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.inventory.fields.unit_qty') }}
                        </th>
                        <td>
                            {{ $inventory->unit_qty }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.inventory.fields.items_per_unit') }}
                        </th>
                        <td>
                            {{ $inventory->items_per_unit }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.inventory.fields.sale') }}
                        </th>
                        <td>
                            {{ App\Models\Inventory::SALE_SELECT[$inventory->sale] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.inventory.fields.discount') }}
                        </th>
                        <td>
                            {{ $inventory->discount }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.inventory.fields.start_sale_date_time') }}
                        </th>
                        <td>
                            {{ $inventory->start_sale_date_time }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.inventory.fields.end_sale_date_time') }}
                        </th>
                        <td>
                            {{ $inventory->end_sale_date_time }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.inventory.fields.howtouse') }}
                        </th>
                        <td>
                            {{ $inventory->howtouse }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.inventory.fields.youtube_link') }}
                        </th>
                        <td>
                            {{ $inventory->youtube_link }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.inventories.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection