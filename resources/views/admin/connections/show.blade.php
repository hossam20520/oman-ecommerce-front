@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.connection.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.connections.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.connection.fields.id') }}
                        </th>
                        <td>
                            {{ $connection->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.connection.fields.database_url') }}
                        </th>
                        <td>
                            {{ $connection->database_url }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.connection.fields.username') }}
                        </th>
                        <td>
                            {{ $connection->username }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.connection.fields.password') }}
                        </th>
                        <td>
                            {{ $connection->password }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.connections.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection