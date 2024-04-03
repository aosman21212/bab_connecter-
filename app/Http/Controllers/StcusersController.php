<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateStcusersRequest;
use App\Http\Requests\UpdateStcusersRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\StcusersRepository;
use Illuminate\Http\Request;
use Flash;

class StcusersController extends AppBaseController
{
    /** @var StcusersRepository $stcusersRepository*/
    private $stcusersRepository;

    public function __construct(StcusersRepository $stcusersRepo)
    {
        $this->stcusersRepository = $stcusersRepo;
    }

    /**
     * Display a listing of the Stcusers.
     */
    public function index(Request $request)
    {
        $stcusers = $this->stcusersRepository->paginate(10);

        return view('stcusers.index')
            ->with('stcusers', $stcusers);
    }

    /**
     * Show the form for creating a new Stcusers.
     */
    public function create()
    {
        return view('stcusers.create');
    }

    /**
     * Store a newly created Stcusers in storage.
     */
    public function store(CreateStcusersRequest $request)
    {
        $input = $request->all();

        $stcusers = $this->stcusersRepository->create($input);

        Flash::success('Stcusers saved successfully.');

        return redirect(route('stcusers.index'));
    }

    /**
     * Display the specified Stcusers.
     */
    public function show($id)
    {
        $stcusers = $this->stcusersRepository->find($id);

        if (empty($stcusers)) {
            Flash::error('Stcusers not found');

            return redirect(route('stcusers.index'));
        }

        return view('stcusers.show')->with('stcusers', $stcusers);
    }

    /**
     * Show the form for editing the specified Stcusers.
     */
    public function edit($id)
    {
        $stcusers = $this->stcusersRepository->find($id);

        if (empty($stcusers)) {
            Flash::error('Stcusers not found');

            return redirect(route('stcusers.index'));
        }

        return view('stcusers.edit')->with('stcusers', $stcusers);
    }

    /**
     * Update the specified Stcusers in storage.
     */
    public function update($id, UpdateStcusersRequest $request)
    {
        $stcusers = $this->stcusersRepository->find($id);

        if (empty($stcusers)) {
            Flash::error('Stcusers not found');

            return redirect(route('stcusers.index'));
        }

        $stcusers = $this->stcusersRepository->update($request->all(), $id);

        Flash::success('Stcusers updated successfully.');

        return redirect(route('stcusers.index'));
    }

    /**
     * Remove the specified Stcusers from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $stcusers = $this->stcusersRepository->find($id);

        if (empty($stcusers)) {
            Flash::error('Stcusers not found');

            return redirect(route('stcusers.index'));
        }

        $this->stcusersRepository->delete($id);

        Flash::success('Stcusers deleted successfully.');

        return redirect(route('stcusers.index'));
    }
}
