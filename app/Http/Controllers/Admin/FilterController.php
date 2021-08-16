<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyFilterRequest;
use App\Http\Requests\StoreFilterRequest;
use App\Http\Requests\UpdateFilterRequest;
use App\Models\Filter;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class FilterController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('filter_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $filters = Filter::all();

        return view('admin.filters.index', compact('filters'));
    }

    public function create()
    {
        abort_if(Gate::denies('filter_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.filters.create');
    }

    public function store(StoreFilterRequest $request)
    {
        $filter = Filter::create($request->all());

        return redirect()->route('admin.filters.index');
    }

    public function edit(Filter $filter)
    {
        abort_if(Gate::denies('filter_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.filters.edit', compact('filter'));
    }

    public function update(UpdateFilterRequest $request, Filter $filter)
    {
        $filter->update($request->all());

        return redirect()->route('admin.filters.index');
    }

    public function show(Filter $filter)
    {
        abort_if(Gate::denies('filter_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.filters.show', compact('filter'));
    }

    public function destroy(Filter $filter)
    {
        abort_if(Gate::denies('filter_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $filter->delete();

        return back();
    }

    public function massDestroy(MassDestroyFilterRequest $request)
    {
        Filter::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
