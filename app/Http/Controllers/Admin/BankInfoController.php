<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyBankInfoRequest;
use App\Http\Requests\StoreBankInfoRequest;
use App\Http\Requests\UpdateBankInfoRequest;
use App\Models\BankInfo;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class BankInfoController extends Controller
{
    use CsvImportTrait;

    public function index()
    {
        abort_if(Gate::denies('bank_info_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $bankInfos = BankInfo::all();

        return view('admin.bankInfos.index', compact('bankInfos'));
    }

    public function create()
    {
        abort_if(Gate::denies('bank_info_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.bankInfos.create');
    }

    public function store(StoreBankInfoRequest $request)
    {
        $bankInfo = BankInfo::create($request->all());

        return redirect()->route('admin.bank-infos.index');
    }

    public function edit(BankInfo $bankInfo)
    {
        abort_if(Gate::denies('bank_info_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.bankInfos.edit', compact('bankInfo'));
    }

    public function update(UpdateBankInfoRequest $request, BankInfo $bankInfo)
    {
        $bankInfo->update($request->all());

        return redirect()->route('admin.bank-infos.index');
    }

    public function show(BankInfo $bankInfo)
    {
        abort_if(Gate::denies('bank_info_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.bankInfos.show', compact('bankInfo'));
    }

    public function destroy(BankInfo $bankInfo)
    {
        abort_if(Gate::denies('bank_info_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $bankInfo->delete();

        return back();
    }

    public function massDestroy(MassDestroyBankInfoRequest $request)
    {
        BankInfo::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
