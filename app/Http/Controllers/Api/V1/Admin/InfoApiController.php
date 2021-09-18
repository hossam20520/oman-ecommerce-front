<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreInfoRequest;
use App\Http\Requests\UpdateInfoRequest;
use App\Http\Resources\Admin\InfoResource;
use App\Models\Info;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class InfoApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('info_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new InfoResource(Info::all());
    }

    public function store(StoreInfoRequest $request)
    {
        $info = Info::create($request->all());

        return (new InfoResource($info))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Info $info)
    {
        abort_if(Gate::denies('info_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new InfoResource($info);
    }

    public function update(UpdateInfoRequest $request, Info $info)
    {
        $info->update($request->all());

        return (new InfoResource($info))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Info $info)
    {
        abort_if(Gate::denies('info_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $info->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
