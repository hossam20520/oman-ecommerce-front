@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.filter.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.filters.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.filter.fields.id') }}
                        </th>
                        <td>
                            {{ $filter->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.filter.fields.brand') }}
                        </th>
                        <td>
                            {{ $filter->brand }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.filter.fields.model') }}
                        </th>
                        <td>
                            {{ $filter->model }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.filter.fields.type') }}
                        </th>
                        <td>
                            {{ $filter->type }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.filter.fields.resutls') }}
                        </th>
                        <td>
                            {{ $filter->resutls }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.filters.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection