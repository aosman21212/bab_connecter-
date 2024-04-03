<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateusersRequest;
use App\Http\Requests\UpdateusersRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\usersRepository;
use Illuminate\Http\Request;
use Flash;

class usersController extends AppBaseController
{
    /** @var usersRepository $usersRepository*/
    private $usersRepository;

    public function __construct(usersRepository $usersRepo)
    {
        $this->usersRepository = $usersRepo;
    }

    /**
     * Display a listing of the users.
     */
    public function index(Request $request)
    {
        $users = $this->usersRepository->paginate(10);

        return view('users.index')
            ->with('users', $users);
    }

    /**
     * Show the form for creating a new users.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created users in storage.
     */
    public function store(CreateusersRequest $request)
    {
        $input = $request->all();

        $users = $this->usersRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/users.singular')]));

        return redirect(route('users.index'));
    }

    /**
     * Display the specified users.
     */
    public function show($id)
    {
        $users = $this->usersRepository->find($id);

        if (empty($users)) {
            Flash::error(__('models/users.singular').' '.__('messages.not_found'));

            return redirect(route('users.index'));
        }

        return view('users.show')->with('users', $users);
    }

    /**
     * Show the form for editing the specified users.
     */
    public function edit($id)
    {
        $users = $this->usersRepository->find($id);

        if (empty($users)) {
            Flash::error(__('models/users.singular').' '.__('messages.not_found'));

            return redirect(route('users.index'));
        }

        return view('users.edit')->with('users', $users);
    }

    /**
     * Update the specified users in storage.
     */
    public function update($id, UpdateusersRequest $request)
    {
        $users = $this->usersRepository->find($id);

        if (empty($users)) {
            Flash::error(__('models/users.singular').' '.__('messages.not_found'));

            return redirect(route('users.index'));
        }

        $users = $this->usersRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/users.singular')]));

        return redirect(route('users.index'));
    }

    /**
     * Remove the specified users from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $users = $this->usersRepository->find($id);

        if (empty($users)) {
            Flash::error(__('models/users.singular').' '.__('messages.not_found'));

            return redirect(route('users.index'));
        }

        $this->usersRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/users.singular')]));

        return redirect(route('users.index'));
    }
}
