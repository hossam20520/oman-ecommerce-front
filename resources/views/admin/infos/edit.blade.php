@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.info.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.infos.update", [$info->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="title">{{ trans('cruds.info.fields.title') }}</label>
                <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', $info->title) }}">
                @if($errors->has('title'))
                    <span class="text-danger">{{ $errors->first('title') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.info.fields.title_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="title_ar">{{ trans('cruds.info.fields.title_ar') }}</label>
                <input class="form-control {{ $errors->has('title_ar') ? 'is-invalid' : '' }}" type="text" name="title_ar" id="title_ar" value="{{ old('title_ar', $info->title_ar) }}">
                @if($errors->has('title_ar'))
                    <span class="text-danger">{{ $errors->first('title_ar') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.info.fields.title_ar_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="about_en">{{ trans('cruds.info.fields.about_en') }}</label>
                <textarea class="form-control {{ $errors->has('about_en') ? 'is-invalid' : '' }}" name="about_en" id="about_en">{{ old('about_en', $info->about_en) }}</textarea>
                @if($errors->has('about_en'))
                    <span class="text-danger">{{ $errors->first('about_en') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.info.fields.about_en_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="about_ar">{{ trans('cruds.info.fields.about_ar') }}</label>
                <textarea class="form-control {{ $errors->has('about_ar') ? 'is-invalid' : '' }}" name="about_ar" id="about_ar">{{ old('about_ar', $info->about_ar) }}</textarea>
                @if($errors->has('about_ar'))
                    <span class="text-danger">{{ $errors->first('about_ar') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.info.fields.about_ar_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="terms_title_en">{{ trans('cruds.info.fields.terms_title_en') }}</label>
                <input class="form-control {{ $errors->has('terms_title_en') ? 'is-invalid' : '' }}" type="text" name="terms_title_en" id="terms_title_en" value="{{ old('terms_title_en', $info->terms_title_en) }}">
                @if($errors->has('terms_title_en'))
                    <span class="text-danger">{{ $errors->first('terms_title_en') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.info.fields.terms_title_en_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="terms_en">{{ trans('cruds.info.fields.terms_en') }}</label>
                <textarea class="form-control {{ $errors->has('terms_en') ? 'is-invalid' : '' }}" name="terms_en" id="terms_en">{{ old('terms_en', $info->terms_en) }}</textarea>
                @if($errors->has('terms_en'))
                    <span class="text-danger">{{ $errors->first('terms_en') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.info.fields.terms_en_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="terms_ar_title">{{ trans('cruds.info.fields.terms_ar_title') }}</label>
                <input class="form-control {{ $errors->has('terms_ar_title') ? 'is-invalid' : '' }}" type="text" name="terms_ar_title" id="terms_ar_title" value="{{ old('terms_ar_title', $info->terms_ar_title) }}">
                @if($errors->has('terms_ar_title'))
                    <span class="text-danger">{{ $errors->first('terms_ar_title') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.info.fields.terms_ar_title_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="terms_ar">{{ trans('cruds.info.fields.terms_ar') }}</label>
                <textarea class="form-control {{ $errors->has('terms_ar') ? 'is-invalid' : '' }}" name="terms_ar" id="terms_ar">{{ old('terms_ar', $info->terms_ar) }}</textarea>
                @if($errors->has('terms_ar'))
                    <span class="text-danger">{{ $errors->first('terms_ar') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.info.fields.terms_ar_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="facebook">{{ trans('cruds.info.fields.facebook') }}</label>
                <input class="form-control {{ $errors->has('facebook') ? 'is-invalid' : '' }}" type="text" name="facebook" id="facebook" value="{{ old('facebook', $info->facebook) }}">
                @if($errors->has('facebook'))
                    <span class="text-danger">{{ $errors->first('facebook') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.info.fields.facebook_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="twitter">{{ trans('cruds.info.fields.twitter') }}</label>
                <input class="form-control {{ $errors->has('twitter') ? 'is-invalid' : '' }}" type="text" name="twitter" id="twitter" value="{{ old('twitter', $info->twitter) }}">
                @if($errors->has('twitter'))
                    <span class="text-danger">{{ $errors->first('twitter') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.info.fields.twitter_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="instagram">{{ trans('cruds.info.fields.instagram') }}</label>
                <input class="form-control {{ $errors->has('instagram') ? 'is-invalid' : '' }}" type="text" name="instagram" id="instagram" value="{{ old('instagram', $info->instagram) }}">
                @if($errors->has('instagram'))
                    <span class="text-danger">{{ $errors->first('instagram') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.info.fields.instagram_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="snapchat">{{ trans('cruds.info.fields.snapchat') }}</label>
                <input class="form-control {{ $errors->has('snapchat') ? 'is-invalid' : '' }}" type="text" name="snapchat" id="snapchat" value="{{ old('snapchat', $info->snapchat) }}">
                @if($errors->has('snapchat'))
                    <span class="text-danger">{{ $errors->first('snapchat') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.info.fields.snapchat_helper') }}</span>
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