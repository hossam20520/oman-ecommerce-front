@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.client.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.clients.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="fname">{{ trans('cruds.client.fields.fname') }}</label>
                <input class="form-control {{ $errors->has('fname') ? 'is-invalid' : '' }}" type="text" name="fname" id="fname" value="{{ old('fname', '') }}" required>
                @if($errors->has('fname'))
                    <span class="text-danger">{{ $errors->first('fname') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.client.fields.fname_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="lname">{{ trans('cruds.client.fields.lname') }}</label>
                <input class="form-control {{ $errors->has('lname') ? 'is-invalid' : '' }}" type="text" name="lname" id="lname" value="{{ old('lname', '') }}" required>
                @if($errors->has('lname'))
                    <span class="text-danger">{{ $errors->first('lname') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.client.fields.lname_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="email">{{ trans('cruds.client.fields.email') }}</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="text" name="email" id="email" value="{{ old('email', '') }}" required>
                @if($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.client.fields.email_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.client.fields.role') }}</label>
                <select class="form-control {{ $errors->has('role') ? 'is-invalid' : '' }}" name="role" id="role" required>
                    <option value disabled {{ old('role', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Client::ROLE_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('role', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('role'))
                    <span class="text-danger">{{ $errors->first('role') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.client.fields.role_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="phone">{{ trans('cruds.client.fields.phone') }}</label>
                <input class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" type="text" name="phone" id="phone" value="{{ old('phone', '') }}" required>
                @if($errors->has('phone'))
                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.client.fields.phone_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="password">{{ trans('cruds.client.fields.password') }}</label>
                <input class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" type="text" name="password" id="password" value="{{ old('password', '') }}" required>
                @if($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.client.fields.password_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.client.fields.group') }}</label>
                <select class="form-control {{ $errors->has('group') ? 'is-invalid' : '' }}" name="group" id="group">
                    <option value disabled {{ old('group', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Client::GROUP_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('group', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('group'))
                    <span class="text-danger">{{ $errors->first('group') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.client.fields.group_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="company">{{ trans('cruds.client.fields.company') }}</label>
                <input class="form-control {{ $errors->has('company') ? 'is-invalid' : '' }}" type="text" name="company" id="company" value="{{ old('company', '') }}">
                @if($errors->has('company'))
                    <span class="text-danger">{{ $errors->first('company') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.client.fields.company_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="crn">{{ trans('cruds.client.fields.crn') }}</label>
                <input class="form-control {{ $errors->has('crn') ? 'is-invalid' : '' }}" type="text" name="crn" id="crn" value="{{ old('crn', '') }}">
                @if($errors->has('crn'))
                    <span class="text-danger">{{ $errors->first('crn') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.client.fields.crn_helper') }}</span>
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