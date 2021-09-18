@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.info.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.infos.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.info.fields.id') }}
                        </th>
                        <td>
                            {{ $info->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.info.fields.title') }}
                        </th>
                        <td>
                            {{ $info->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.info.fields.title_ar') }}
                        </th>
                        <td>
                            {{ $info->title_ar }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.info.fields.about_en') }}
                        </th>
                        <td>
                            {{ $info->about_en }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.info.fields.about_ar') }}
                        </th>
                        <td>
                            {{ $info->about_ar }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.info.fields.terms_title_en') }}
                        </th>
                        <td>
                            {{ $info->terms_title_en }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.info.fields.terms_en') }}
                        </th>
                        <td>
                            {{ $info->terms_en }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.info.fields.terms_ar_title') }}
                        </th>
                        <td>
                            {{ $info->terms_ar_title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.info.fields.terms_ar') }}
                        </th>
                        <td>
                            {{ $info->terms_ar }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.info.fields.facebook') }}
                        </th>
                        <td>
                            {{ $info->facebook }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.info.fields.twitter') }}
                        </th>
                        <td>
                            {{ $info->twitter }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.info.fields.instagram') }}
                        </th>
                        <td>
                            {{ $info->instagram }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.info.fields.snapchat') }}
                        </th>
                        <td>
                            {{ $info->snapchat }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.infos.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection