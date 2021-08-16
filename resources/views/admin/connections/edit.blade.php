@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.connection.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.connections.update", [$connection->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="database_url">{{ trans('cruds.connection.fields.database_url') }}</label>
                <input class="form-control {{ $errors->has('database_url') ? 'is-invalid' : '' }}" type="text" name="database_url" id="database_url" value="{{ old('database_url', $connection->database_url) }}">
                @if($errors->has('database_url'))
                    <span class="text-danger">{{ $errors->first('database_url') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.connection.fields.database_url_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="username">{{ trans('cruds.connection.fields.username') }}</label>
                <input class="form-control {{ $errors->has('username') ? 'is-invalid' : '' }}" type="text" name="username" id="username" value="{{ old('username', $connection->username) }}" required>
                @if($errors->has('username'))
                    <span class="text-danger">{{ $errors->first('username') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.connection.fields.username_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="password">{{ trans('cruds.connection.fields.password') }}</label>
                <input class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" type="text" name="password" id="password" value="{{ old('password', $connection->password) }}" required>
                @if($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.connection.fields.password_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection