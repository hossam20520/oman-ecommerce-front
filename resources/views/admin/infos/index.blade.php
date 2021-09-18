@extends('layouts.admin')
@section('content')
@can('info_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.infos.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.info.title_singular') }}
            </a>
            <button class="btn btn-warning" data-toggle="modal" data-target="#csvImportModal">
                {{ trans('global.app_csvImport') }}
            </button>
            @include('csvImport.modal', ['model' => 'Info', 'route' => 'admin.infos.parseCsvImport'])
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.info.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Info">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.info.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.info.fields.title') }}
                        </th>
                        <th>
                            {{ trans('cruds.info.fields.title_ar') }}
                        </th>
                        <th>
                            {{ trans('cruds.info.fields.about_en') }}
                        </th>
                        <th>
                            {{ trans('cruds.info.fields.about_ar') }}
                        </th>
                        <th>
                            {{ trans('cruds.info.fields.terms_title_en') }}
                        </th>
                        <th>
                            {{ trans('cruds.info.fields.terms_en') }}
                        </th>
                        <th>
                            {{ trans('cruds.info.fields.terms_ar_title') }}
                        </th>
                        <th>
                            {{ trans('cruds.info.fields.terms_ar') }}
                        </th>
                        <th>
                            {{ trans('cruds.info.fields.facebook') }}
                        </th>
                        <th>
                            {{ trans('cruds.info.fields.twitter') }}
                        </th>
                        <th>
                            {{ trans('cruds.info.fields.instagram') }}
                        </th>
                        <th>
                            {{ trans('cruds.info.fields.snapchat') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($infos as $key => $info)
                        <tr data-entry-id="{{ $info->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $info->id ?? '' }}
                            </td>
                            <td>
                                {{ $info->title ?? '' }}
                            </td>
                            <td>
                                {{ $info->title_ar ?? '' }}
                            </td>
                            <td>
                                {{ $info->about_en ?? '' }}
                            </td>
                            <td>
                                {{ $info->about_ar ?? '' }}
                            </td>
                            <td>
                                {{ $info->terms_title_en ?? '' }}
                            </td>
                            <td>
                                {{ $info->terms_en ?? '' }}
                            </td>
                            <td>
                                {{ $info->terms_ar_title ?? '' }}
                            </td>
                            <td>
                                {{ $info->terms_ar ?? '' }}
                            </td>
                            <td>
                                {{ $info->facebook ?? '' }}
                            </td>
                            <td>
                                {{ $info->twitter ?? '' }}
                            </td>
                            <td>
                                {{ $info->instagram ?? '' }}
                            </td>
                            <td>
                                {{ $info->snapchat ?? '' }}
                            </td>
                            <td>
                                @can('info_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.infos.show', $info->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('info_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.infos.edit', $info->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('info_delete')
                                    <form action="{{ route('admin.infos.destroy', $info->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('info_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.infos.massDestroy') }}",
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
  let table = $('.datatable-Info:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection