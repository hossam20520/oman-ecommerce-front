<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyConnectionRequest;
use App\Http\Requests\StoreConnectionRequest;
use App\Http\Requests\UpdateConnectionRequest;
use App\Models\Connection;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ConnectionController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('connection_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $connections = Connection::all();

        return view('admin.connections.index', compact('connections'));
    }

    public function create()
    {
        abort_if(Gate::denies('connection_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.connections.create');
    }

    public function store(StoreConnectionRequest $request)
    {
        $connection = Connection::create($request->all());

        return redirect()->route('admin.connections.index');
    }

    public function edit(Connection $connection)
    {
        abort_if(Gate::denies('connection_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.connections.edit', compact('connection'));
    }

    public function update(UpdateConnectionRequest $request, Connection $connection)
    {
        $connection->update($request->all());

        return redirect()->route('admin.connections.index');
    }

    public function show(Connection $connection)
    {
        abort_if(Gate::denies('connection_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.connections.show', compact('connection'));
    }

    public function destroy(Connection $connection)
    {
        abort_if(Gate::denies('connection_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $connection->delete();

        return back();
    }

    public function massDestroy(MassDestroyConnectionRequest $request)
    {
        Connection::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
