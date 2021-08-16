@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.filter.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.filters.update", [$filter->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="brand">{{ trans('cruds.filter.fields.brand') }}</label>
                <input class="form-control {{ $errors->has('brand') ? 'is-invalid' : '' }}" type="text" name="brand" id="brand" value="{{ old('brand', $filter->brand) }}" required>
                @if($errors->has('brand'))
                    <span class="text-danger">{{ $errors->first('brand') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.filter.fields.brand_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="model">{{ trans('cruds.filter.fields.model') }}</label>
                <input class="form-control {{ $errors->has('model') ? 'is-invalid' : '' }}" type="text" name="model" id="model" value="{{ old('model', $filter->model) }}" required>
                @if($errors->has('model'))
                    <span class="text-danger">{{ $errors->first('model') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.filter.fields.model_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="type">{{ trans('cruds.filter.fields.type') }}</label>
                <input class="form-control {{ $errors->has('type') ? 'is-invalid' : '' }}" type="text" name="type" id="type" value="{{ old('type', $filter->type) }}" required>
                @if($errors->has('type'))
                    <span class="text-danger">{{ $errors->first('type') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.filter.fields.type_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="capacities">{{ trans('cruds.filter.fields.capacities') }}</label>
                <input class="form-control {{ $errors->has('capacities') ? 'is-invalid' : '' }}" type="text" name="capacities" id="capacities" value="{{ old('capacities', $filter->capacities) }}" required>
                @if($errors->has('capacities'))
                    <span class="text-danger">{{ $errors->first('capacities') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.filter.fields.capacities_helper') }}</span>
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