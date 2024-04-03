<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatelocationsRequest;
use App\Http\Requests\UpdatelocationsRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\locationsRepository;
use Illuminate\Http\Request;
use Flash;

class locationsController extends AppBaseController
{
    /** @var locationsRepository $locationsRepository*/
    private $locationsRepository;

    public function __construct(locationsRepository $locationsRepo)
    {
        $this->locationsRepository = $locationsRepo;
    }

    /**
     * Display a listing of the locations.
     */
    public function index(Request $request)
    {
        $locations = $this->locationsRepository->paginate(10);

        return view('locations.index')
            ->with('locations', $locations);
    }

    /**
     * Show the form for creating a new locations.
     */
    public function create()
    {
        $Messages = \App\Models\Messages::pluck('id', 'id');

        return view('locations.create',compact('Messages'));
    }

    /**
     * Store a newly created locations in storage.
     */
    public function store(CreatelocationsRequest $request)
    {
        $input = $request->all();

        $locations = $this->locationsRepository->create($input);

        Flash::success('Locations saved successfully.');

        return redirect(route('locations.index'));
    }

    /**
     * Display the specified locations.
     */
    public function show($id)
    {
        $locations = $this->locationsRepository->find($id);

        if (empty($locations)) {
            Flash::error('Locations not found');

            return redirect(route('locations.index'));
        }

        return view('locations.show')->with('locations', $locations);
    }

    /**
     * Show the form for editing the specified locations.
     */
    public function edit($id)
    {
        $locations = $this->locationsRepository->find($id);

        if (empty($locations)) {
            Flash::error('Locations not found');

            return redirect(route('locations.index'));
        }

        return view('locations.edit')->with('locations', $locations);
    }

    /**
     * Update the specified locations in storage.
     */
    public function update($id, UpdatelocationsRequest $request)
    {
        $locations = $this->locationsRepository->find($id);

        if (empty($locations)) {
            Flash::error('Locations not found');

            return redirect(route('locations.index'));
        }

        $locations = $this->locationsRepository->update($request->all(), $id);

        Flash::success('Locations updated successfully.');

        return redirect(route('locations.index'));
    }

    /**
     * Remove the specified locations from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $locations = $this->locationsRepository->find($id);

        if (empty($locations)) {
            Flash::error('Locations not found');

            return redirect(route('locations.index'));
        }

        $this->locationsRepository->delete($id);

        Flash::success('Locations deleted successfully.');

        return redirect(route('locations.index'));
    }
}
