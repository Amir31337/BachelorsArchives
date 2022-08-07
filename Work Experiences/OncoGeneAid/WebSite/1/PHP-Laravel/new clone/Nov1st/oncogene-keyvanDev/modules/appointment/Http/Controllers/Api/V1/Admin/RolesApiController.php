<?php

namespace Modules\appointment\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use Modules\appointment\Http\Requests\StoreRoleRequest;
use Modules\appointment\Http\Requests\UpdateRoleRequest;
use Modules\appointment\Http\Resources\Admin\RoleResource;
use Modules\appointment\Models\Role;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RolesApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('role_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new RoleResource(Role::with(['permissions'])->get());
    }

    public function store(StoreRoleRequest $request)
    {
        $role = Role::create($request->all());
        $role->permissions()->sync($request->input('permissions', []));

        return (new RoleResource($role))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Role $role)
    {
        abort_if(Gate::denies('role_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new RoleResource($role->load(['permissions']));
    }

    public function update(UpdateRoleRequest $request, Role $role)
    {
        $role->update($request->all());
        $role->permissions()->sync($request->input('permissions', []));

        return (new RoleResource($role))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Role $role)
    {
        abort_if(Gate::denies('role_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $role->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
