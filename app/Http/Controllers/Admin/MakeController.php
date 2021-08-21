<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyMakeRequest;
use App\Http\Requests\StoreMakeRequest;
use App\Http\Requests\UpdateMakeRequest;
use App\Models\Make;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MakeController extends Controller
{
    use CsvImportTrait;

    public function index()
    {
        abort_if(Gate::denies('make_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $makes = Make::all();

        return view('admin.makes.index', compact('makes'));
    }

    public function create()
    {
        abort_if(Gate::denies('make_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.makes.create');
    }

    public function store(StoreMakeRequest $request)
    {
        $make = Make::create($request->all());

        return redirect()->route('admin.makes.index');
    }

    public function edit(Make $make)
    {
        abort_if(Gate::denies('make_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.makes.edit', compact('make'));
    }

    public function update(UpdateMakeRequest $request, Make $make)
    {
        $make->update($request->all());

        return redirect()->route('admin.makes.index');
    }

    public function show(Make $make)
    {
        abort_if(Gate::denies('make_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.makes.show', compact('make'));
    }

    public function destroy(Make $make)
    {
        abort_if(Gate::denies('make_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $make->delete();

        return back();
    }

    public function massDestroy(MassDestroyMakeRequest $request)
    {
        Make::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
