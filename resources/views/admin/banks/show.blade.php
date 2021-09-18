@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.bank.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.banks.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.bank.fields.id') }}
                        </th>
                        <td>
                            {{ $bank->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.bank.fields.email') }}
                        </th>
                        <td>
                            {{ $bank->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.bank.fields.phone') }}
                        </th>
                        <td>
                            {{ $bank->phone }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.bank.fields.image') }}
                        </th>
                        <td>
                            @if($bank->image)
                                <a href="{{ $bank->image->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $bank->image->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.bank.fields.status') }}
                        </th>
                        <td>
                            {{ App\Models\Bank::STATUS_SELECT[$bank->status] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.bank.fields.order') }}
                        </th>
                        <td>
                            {{ $bank->order->orderid ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.banks.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection