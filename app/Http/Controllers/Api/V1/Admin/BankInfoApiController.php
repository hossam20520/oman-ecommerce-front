<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBankInfoRequest;
use App\Http\Requests\UpdateBankInfoRequest;
use App\Http\Resources\Admin\BankInfoResource;
use App\Models\BankInfo;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class BankInfoApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('bank_info_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new BankInfoResource(BankInfo::all());
    }

    public function store(StoreBankInfoRequest $request)
    {
        $bankInfo = BankInfo::create($request->all());

        return (new BankInfoResource($bankInfo))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(BankInfo $bankInfo)
    {
        abort_if(Gate::denies('bank_info_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new BankInfoResource($bankInfo);
    }

    public function update(UpdateBankInfoRequest $request, BankInfo $bankInfo)
    {
        $bankInfo->update($request->all());

        return (new BankInfoResource($bankInfo))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(BankInfo $bankInfo)
    {
        abort_if(Gate::denies('bank_info_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $bankInfo->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
