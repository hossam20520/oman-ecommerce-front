@extends('layouts.admin')
@section('content')
@can('bank_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.banks.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.bank.title_singular') }}
            </a>
            <button class="btn btn-warning" data-toggle="modal" data-target="#csvImportModal">
                {{ trans('global.app_csvImport') }}
            </button>
            @include('csvImport.modal', ['model' => 'Bank', 'route' => 'admin.banks.parseCsvImport'])
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.bank.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Bank">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.bank.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.bank.fields.email') }}
                        </th>
                        <th>
                            {{ trans('cruds.bank.fields.phone') }}
                        </th>
                        <th>
                            {{ trans('cruds.bank.fields.image') }}
                        </th>
                        <th>
                            {{ trans('cruds.bank.fields.status') }}
                        </th>
                        <th>
                            {{ trans('cruds.bank.fields.order') }}
                        </th>
                        <th>
                            {{ trans('cruds.order.fields.payment') }}
                        </th>
                        <th>
                            {{ trans('cruds.order.fields.payment_status') }}
                        </th>
                        <th>
                            {{ trans('cruds.order.fields.total_cost') }}
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
                        </td>
                        <td>
                            <select class="search" strict="true">
                                <option value>{{ trans('global.all') }}</option>
                                @foreach(App\Models\Bank::STATUS_SELECT as $key => $item)
                                    <option value="{{ $item }}">{{ $item }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <select class="search">
                                <option value>{{ trans('global.all') }}</option>
                                @foreach($orders as $key => $item)
                                    <option value="{{ $item->orderid }}">{{ $item->orderid }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($banks as $key => $bank)
                        <tr data-entry-id="{{ $bank->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $bank->id ?? '' }}
                            </td>
                            <td>
                                {{ $bank->email ?? '' }}
                            </td>
                            <td>
                                {{ $bank->phone ?? '' }}
                            </td>
                            <td>
                                @if($bank->image)
                                    <a href="{{ $bank->image->getUrl() }}" target="_blank" style="display: inline-block">
                                        <img src="{{ $bank->image->getUrl('thumb') }}">
                                    </a>
                                @endif
                            </td>
                            <td>
                                {{ App\Models\Bank::STATUS_SELECT[$bank->status] ?? '' }}
                            </td>
                            <td>
                                {{ $bank->order->orderid ?? '' }}
                            </td>
                            <td>
                                {{ $bank->order->payment ?? '' }}
                            </td>
                            <td>
                                @if($bank->order)
                                    {{ $bank->order::PAYMENT_STATUS_SELECT[$bank->order->payment_status] ?? '' }}
                                @endif
                            </td>
                            <td>
                                {{ $bank->order->total_cost ?? '' }}
                            </td>
                            <td>
                                @can('bank_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.banks.show', $bank->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('bank_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.banks.edit', $bank->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('bank_delete')
                                    <form action="{{ route('admin.banks.destroy', $bank->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('bank_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.banks.massDestroy') }}",
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
  let table = $('.datatable-Bank:not(.ajaxTable)').DataTable({ buttons: dtButtons })
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