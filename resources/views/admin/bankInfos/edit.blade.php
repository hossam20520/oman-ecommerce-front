@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.bankInfo.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.bank-infos.update", [$bankInfo->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="bankname">{{ trans('cruds.bankInfo.fields.bankname') }}</label>
                <input class="form-control {{ $errors->has('bankname') ? 'is-invalid' : '' }}" type="text" name="bankname" id="bankname" value="{{ old('bankname', $bankInfo->bankname) }}">
                @if($errors->has('bankname'))
                    <span class="text-danger">{{ $errors->first('bankname') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.bankInfo.fields.bankname_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="bank_number">{{ trans('cruds.bankInfo.fields.bank_number') }}</label>
                <input class="form-control {{ $errors->has('bank_number') ? 'is-invalid' : '' }}" type="text" name="bank_number" id="bank_number" value="{{ old('bank_number', $bankInfo->bank_number) }}">
                @if($errors->has('bank_number'))
                    <span class="text-danger">{{ $errors->first('bank_number') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.bankInfo.fields.bank_number_helper') }}</span>
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