@extends('layouts.admin')
@section('content')
@can('inventory_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.inventories.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.inventory.title_singular') }}
            </a>
            <button class="btn btn-warning" data-toggle="modal" data-target="#csvImportModal">
                {{ trans('global.app_csvImport') }}
            </button>
            @include('csvImport.modal', ['model' => 'Inventory', 'route' => 'admin.inventories.parseCsvImport'])
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.inventory.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Inventory">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.inventory.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.inventory.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.inventory.fields.name_ar') }}
                        </th>
                        <th>
                            {{ trans('cruds.inventory.fields.sku') }}
                        </th>
                        <th>
                            {{ trans('cruds.inventory.fields.price') }}
                        </th>
                        <th>
                            {{ trans('cruds.inventory.fields.inventory') }}
                        </th>
                        <th>
                            {{ trans('cruds.inventory.fields.desc') }}
                        </th>
                        <th>
                            {{ trans('cruds.inventory.fields.full_desc_ar') }}
                        </th>
                        <th>
                            {{ trans('cruds.inventory.fields.short_desc') }}
                        </th>
                        <th>
                            {{ trans('cruds.inventory.fields.short_desc_ar') }}
                        </th>
                        <th>
                            {{ trans('cruds.inventory.fields.image') }}
                        </th>
                        <th>
                            {{ trans('cruds.inventory.fields.gallery') }}
                        </th>
                        <th>
                            {{ trans('cruds.inventory.fields.category') }}
                        </th>
                        <th>
                            {{ trans('cruds.inventory.fields.brand') }}
                        </th>
                        <th>
                            {{ trans('cruds.inventory.fields.product_unit') }}
                        </th>
                        <th>
                            {{ trans('cruds.inventory.fields.box_quantity') }}
                        </th>
                        <th>
                            {{ trans('cruds.inventory.fields.product_cost') }}
                        </th>
                        <th>
                            {{ trans('cruds.inventory.fields.price_group_1') }}
                        </th>
                        <th>
                            {{ trans('cruds.inventory.fields.price_group_2') }}
                        </th>
                        <th>
                            {{ trans('cruds.inventory.fields.price_group_3') }}
                        </th>
                        <th>
                            {{ trans('cruds.inventory.fields.price_group_4') }}
                        </th>
                        <th>
                            {{ trans('cruds.inventory.fields.price_group_5') }}
                        </th>
                        <th>
                            {{ trans('cruds.inventory.fields.price_group_6') }}
                        </th>
                        <th>
                            {{ trans('cruds.inventory.fields.product_unit_wholse') }}
                        </th>
                        <th>
                            {{ trans('cruds.inventory.fields.unit_qty') }}
                        </th>
                        <th>
                            {{ trans('cruds.inventory.fields.items_per_unit') }}
                        </th>
                        <th>
                            {{ trans('cruds.inventory.fields.sale') }}
                        </th>
                        <th>
                            {{ trans('cruds.inventory.fields.discount') }}
                        </th>
                        <th>
                            {{ trans('cruds.inventory.fields.start_sale_date_time') }}
                        </th>
                        <th>
                            {{ trans('cruds.inventory.fields.end_sale_date_time') }}
                        </th>
                        <th>
                            {{ trans('cruds.inventory.fields.howtouse') }}
                        </th>
                        <th>
                            {{ trans('cruds.inventory.fields.how_to_use_ar') }}
                        </th>
                        <th>
                            {{ trans('cruds.inventory.fields.youtube_link') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                    <tr>
                        <td>
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                        <td>
                            <select class="search">
                                <option value>{{ trans('global.all') }}</option>
                                @foreach($categories as $key => $item)
                                    <option value="{{ $item->category }}">{{ $item->category }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <select class="search" strict="true">
                                <option value>{{ trans('global.all') }}</option>
                                @foreach(App\Models\Inventory::PRODUCT_UNIT_SELECT as $key => $item)
                                    <option value="{{ $item }}">{{ $item }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <select class="search" strict="true">
                                <option value>{{ trans('global.all') }}</option>
                                @foreach(App\Models\Inventory::PRODUCT_UNIT_WHOLSE_SELECT as $key => $item)
                                    <option value="{{ $item }}">{{ $item }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <select class="search" strict="true">
                                <option value>{{ trans('global.all') }}</option>
                                @foreach(App\Models\Inventory::SALE_SELECT as $key => $item)
                                    <option value="{{ $item }}">{{ $item }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                        </td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($inventories as $key => $inventory)
                        <tr data-entry-id="{{ $inventory->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $inventory->id ?? '' }}
                            </td>
                            <td>
                                {{ $inventory->name ?? '' }}
                            </td>
                            <td>
                                {{ $inventory->name_ar ?? '' }}
                            </td>
                            <td>
                                {{ $inventory->sku ?? '' }}
                            </td>
                            <td>
                                {{ $inventory->price ?? '' }}
                            </td>
                            <td>
                                {{ $inventory->inventory ?? '' }}
                            </td>
                            <td>
                                {{ $inventory->desc ?? '' }}
                            </td>
                            <td>
                                {{ $inventory->full_desc_ar ?? '' }}
                            </td>
                            <td>
                                {{ $inventory->short_desc ?? '' }}
                            </td>
                            <td>
                                {{ $inventory->short_desc_ar ?? '' }}
                            </td>
                            <td>
                                @if($inventory->image)
                                    <a href="{{ $inventory->image->getUrl() }}" target="_blank" style="display: inline-block">
                                        <img src="{{ $inventory->image->getUrl('thumb') }}">
                                    </a>
                                @endif
                            </td>
                            <td>
                                @foreach($inventory->gallery as $key => $media)
                                    <a href="{{ $media->getUrl() }}" target="_blank" style="display: inline-block">
                                        <img src="{{ $media->getUrl('thumb') }}">
                                    </a>
                                @endforeach
                            </td>
                            <td>
                                {{ $inventory->category->category ?? '' }}
                            </td>
                            <td>
                                {{ $inventory->brand ?? '' }}
                            </td>
                            <td>
                                {{ App\Models\Inventory::PRODUCT_UNIT_SELECT[$inventory->product_unit] ?? '' }}
                            </td>
                            <td>
                                {{ $inventory->box_quantity ?? '' }}
                            </td>
                            <td>
                                {{ $inventory->product_cost ?? '' }}
                            </td>
                            <td>
                                {{ $inventory->price_group_1 ?? '' }}
                            </td>
                            <td>
                                {{ $inventory->price_group_2 ?? '' }}
                            </td>
                            <td>
                                {{ $inventory->price_group_3 ?? '' }}
                            </td>
                            <td>
                                {{ $inventory->price_group_4 ?? '' }}
                            </td>
                            <td>
                                {{ $inventory->price_group_5 ?? '' }}
                            </td>
                            <td>
                                {{ $inventory->price_group_6 ?? '' }}
                            </td>
                            <td>
                                {{ App\Models\Inventory::PRODUCT_UNIT_WHOLSE_SELECT[$inventory->product_unit_wholse] ?? '' }}
                            </td>
                            <td>
                                {{ $inventory->unit_qty ?? '' }}
                            </td>
                            <td>
                                {{ $inventory->items_per_unit ?? '' }}
                            </td>
                            <td>
                                {{ App\Models\Inventory::SALE_SELECT[$inventory->sale] ?? '' }}
                            </td>
                            <td>
                                {{ $inventory->discount ?? '' }}
                            </td>
                            <td>
                                {{ $inventory->start_sale_date_time ?? '' }}
                            </td>
                            <td>
                                {{ $inventory->end_sale_date_time ?? '' }}
                            </td>
                            <td>
                                {{ $inventory->howtouse ?? '' }}
                            </td>
                            <td>
                                {{ $inventory->how_to_use_ar ?? '' }}
                            </td>
                            <td>
                                {{ $inventory->youtube_link ?? '' }}
                            </td>
                            <td>
                                @can('inventory_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.inventories.show', $inventory->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('inventory_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.inventories.edit', $inventory->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('inventory_delete')
                                    <form action="{{ route('admin.inventories.destroy', $inventory->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('inventory_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.inventories.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-Inventory:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
let visibleColumnsIndexes = null;
$('.datatable thead').on('input', '.search', function () {
      let strict = $(this).attr('strict') || false
      let value = strict && this.value ? "^" + this.value + "$" : this.value

      let index = $(this).parent().index()
      if (visibleColumnsIndexes !== null) {
        index = visibleColumnsIndexes[index]
      }

      table
        .column(index)
        .search(value, strict)
        .draw()
  });
table.on('column-visibility.dt', function(e, settings, column, state) {
      visibleColumnsIndexes = []
      table.columns(":visible").every(function(colIdx) {
          visibleColumnsIndexes.push(colIdx);
      });
  })
})

</script>
@endsection