<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatepermissionsRequest;
use App\Http\Requests\UpdatepermissionsRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\permissionsRepository;
use Spatie\Permission\Models\Role as SpRole;
use Spatie\Permission\Models\Permission as SpPermission;
use Illuminate\Http\Request;
use Flash;

class permissionsController extends AppBaseController
{
    /** @var permissionsRepository $permissionsRepository*/
    private $permissionsRepository;

    public function __construct(permissionsRepository $permissionsRepo)
    {
        $this->permissionsRepository = $permissionsRepo;
    }

    /**
     * Display a listing of the permissions.
     */
    public function index(Request $request)
    {
        $permissions = $this->permissionsRepository->paginate(10);

        return view('permissions.index')
            ->with('permissions', $permissions);
    }

    /**
     * Show the form for creating a new permissions.
     */
    public function create()
    {
        return view('permissions.create');
    }

    /**
     * Store a newly created permissions in storage.
     */
    public function store(CreatepermissionsRequest $request)
    {
        $input = $request->all();

        $permissions = $this->permissionsRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/permissions.singular')]));

        return redirect(route('permissions.index'));
    }

    /**
     * Display the specified permissions.
     */
    public function show($id)
    {
        $permissions = $this->permissionsRepository->find($id);

        if (empty($permissions)) {
            Flash::error(__('models/permissions.singular').' '.__('messages.not_found'));

            return redirect(route('permissions.index'));
        }

        return view('permissions.show')->with('permissions', $permissions);
    }

    /**
     * Show the form for editing the specified permissions.
     */
    public function edit($id)
    {
        $permissions = $this->permissionsRepository->find($id);

        if (empty($permissions)) {
            Flash::error(__('models/permissions.singular').' '.__('messages.not_found'));

            return redirect(route('permissions.index'));
        }

        return view('permissions.edit')->with('permissions', $permissions);
    }

    /**
     * Update the specified permissions in storage.
     */
    public function update($id, UpdatepermissionsRequest $request)
    {
        $permissions = $this->permissionsRepository->find($id);

        if (empty($permissions)) {
            Flash::error(__('models/permissions.singular').' '.__('messages.not_found'));

            return redirect(route('permissions.index'));
        }

        $permissions = $this->permissionsRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/permissions.singular')]));

        return redirect(route('permissions.index'));
    }

    /**
     * Remove the specified permissions from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $permissions = $this->permissionsRepository->find($id);

        if (empty($permissions)) {
            Flash::error(__('models/permissions.singular').' '.__('messages.not_found'));

            return redirect(route('permissions.index'));
        }

        $this->permissionsRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/permissions.singular')]));

        return redirect(route('permissions.index'));
    }
    public function assignPermissions($id)
    {
        $role = SpRole::findOrFail($id);
        $permissions = SpPermission::all();
        return view('roles.assignpermissions')
            ->with('role', $role)->with('permissions',$permissions);        
    }

    public function updatePermissions($id, Request $request)
    {
        $role = SpRole::findOrFail($id);;
        $permissions = SpPermission::all();
        foreach($permissions as $permission) {
            if (isset($request->permission[$permission->id])) {
                $role->givePermissionTo($permission);
            }
            else {
                $role->revokePermissionTo($permission);
            }
        }
        Flash::success('Roles updated successfully.');
        return redirect(route('roles.index'));
    }

}
