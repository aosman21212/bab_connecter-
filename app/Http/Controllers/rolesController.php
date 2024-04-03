<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreaterolesRequest;
use App\Http\Requests\UpdaterolesRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\rolesRepository;
use Spatie\Permission\Models\Role as SpRole;
use Spatie\Permission\Models\Permission as SpPermission;
use Illuminate\Http\Request;
use Flash;

class rolesController extends AppBaseController
{
    /** @var rolesRepository $rolesRepository*/
    private $rolesRepository;

    public function __construct(rolesRepository $rolesRepo)
    {
        $this->rolesRepository = $rolesRepo;
    }

    /**
     * Display a listing of the roles.
     */
    public function index(Request $request)
    {
        $roles = $this->rolesRepository->paginate(10);

        return view('roles.index')
            ->with('roles', $roles);
    }

    /**
     * Show the form for creating a new roles.
     */
    public function create()
    {
        return view('roles.create');
    }

    /**
     * Store a newly created roles in storage.
     */
    public function store(CreaterolesRequest $request)
    {
        $input = $request->all();

        $roles = $this->rolesRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/roles.singular')]));

        return redirect(route('roles.index'));
    }

    /**
     * Display the specified roles.
     */
    public function show($id)
    {
        $roles = $this->rolesRepository->find($id);

        if (empty($roles)) {
            Flash::error(__('models/roles.singular').' '.__('messages.not_found'));

            return redirect(route('roles.index'));
        }

        return view('roles.show')->with('roles', $roles);
    }

    /**
     * Show the form for editing the specified roles.
     */
    public function edit($id)
    {
        $roles = $this->rolesRepository->find($id);

        if (empty($roles)) {
            Flash::error(__('models/roles.singular').' '.__('messages.not_found'));

            return redirect(route('roles.index'));
        }

        return view('roles.edit')->with('roles', $roles);
    }

    /**
     * Update the specified roles in storage.
     */
    public function update($id, UpdaterolesRequest $request)
    {
        $roles = $this->rolesRepository->find($id);

        if (empty($roles)) {
            Flash::error(__('models/roles.singular').' '.__('messages.not_found'));

            return redirect(route('roles.index'));
        }

        $roles = $this->rolesRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/roles.singular')]));

        return redirect(route('roles.index'));
    }

    /**
     * Remove the specified roles from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $roles = $this->rolesRepository->find($id);

        if (empty($roles)) {
            Flash::error(__('models/roles.singular').' '.__('messages.not_found'));

            return redirect(route('roles.index'));
        }

        $this->rolesRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/roles.singular')]));

        return redirect(route('roles.index'));
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
