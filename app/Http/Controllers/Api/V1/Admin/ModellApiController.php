<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreModellRequest;
use App\Http\Requests\UpdateModellRequest;
use App\Http\Resources\Admin\ModellResource;
use App\Models\Modell;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ModellApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('modell_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ModellResource(Modell::all());
    }

    public function store(StoreModellRequest $request)
    {
        $modell = Modell::create($request->all());

        return (new ModellResource($modell))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Modell $modell)
    {
        abort_if(Gate::denies('modell_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ModellResource($modell);
    }

    public function update(UpdateModellRequest $request, Modell $modell)
    {
        $modell->update($request->all());

        return (new ModellResource($modell))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Modell $modell)
    {
        abort_if(Gate::denies('modell_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $modell->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
