<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFilterRequest;
use App\Http\Requests\UpdateFilterRequest;
use App\Http\Resources\Admin\FilterResource;
use App\Models\Filter;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class FilterApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('filter_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new FilterResource(Filter::all());
    }

    public function store(StoreFilterRequest $request)
    {
        $filter = Filter::create($request->all());

        return (new FilterResource($filter))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Filter $filter)
    {
        abort_if(Gate::denies('filter_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new FilterResource($filter);
    }

    public function update(UpdateFilterRequest $request, Filter $filter)
    {
        $filter->update($request->all());

        return (new FilterResource($filter))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Filter $filter)
    {
        abort_if(Gate::denies('filter_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $filter->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
