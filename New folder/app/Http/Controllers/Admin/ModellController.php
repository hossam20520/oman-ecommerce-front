<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyModellRequest;
use App\Http\Requests\StoreModellRequest;
use App\Http\Requests\UpdateModellRequest;
use App\Models\Modell;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ModellController extends Controller
{
    use CsvImportTrait;

    public function index()
    {
        abort_if(Gate::denies('modell_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $modells = Modell::all();

        return view('admin.modells.index', compact('modells'));
    }

    public function create()
    {
        abort_if(Gate::denies('modell_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.modells.create');
    }

    public function store(StoreModellRequest $request)
    {
        $modell = Modell::create($request->all());

        return redirect()->route('admin.modells.index');
    }

    public function edit(Modell $modell)
    {
        abort_if(Gate::denies('modell_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.modells.edit', compact('modell'));
    }

    public function update(UpdateModellRequest $request, Modell $modell)
    {
        $modell->update($request->all());

        return redirect()->route('admin.modells.index');
    }

    public function show(Modell $modell)
    {
        abort_if(Gate::denies('modell_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.modells.show', compact('modell'));
    }

    public function destroy(Modell $modell)
    {
        abort_if(Gate::denies('modell_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $modell->delete();

        return back();
    }

    public function massDestroy(MassDestroyModellRequest $request)
    {
        Modell::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
