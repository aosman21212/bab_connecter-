<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatebusinessesRequest;
use App\Http\Requests\UpdatebusinessesRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\businessesRepository;
use Illuminate\Http\Request;
use Flash;

class businessesController extends AppBaseController
{
    /** @var businessesRepository $businessesRepository*/
    private $businessesRepository;

    public function __construct(businessesRepository $businessesRepo)
    {
        $this->businessesRepository = $businessesRepo;
    }

    /**
     * Display a listing of the businesses.
     */
    public function index(Request $request)
    {
        $businesses = $this->businessesRepository->paginate(4);

        return view('businesses.index')
            ->with('businesses', $businesses);
    }

    /**
     * Show the form for creating a new businesses.
     */
    public function create()
    {
        return view('businesses.create');
    }

    /**
     * Store a newly created businesses in storage.
     */
    public function store(CreatebusinessesRequest $request)
    {
        $input = $request->all();

        $businesses = $this->businessesRepository->create($input);

        Flash::success('Businesses saved successfully.');

        return redirect(route('businesses.index'));
    }

    /**
     * Display the specified businesses.
     */
    public function show($id)
    {
        $businesses = $this->businessesRepository->find($id);

        if (empty($businesses)) {
            Flash::error('Businesses not found');

            return redirect(route('businesses.index'));
        }

        return view('businesses.show')->with('businesses', $businesses);
    }

    /**
     * Show the form for editing the specified businesses.
     */
    public function edit($id)
    {
        $businesses = $this->businessesRepository->find($id);

        if (empty($businesses)) {
            Flash::error('Businesses not found');

            return redirect(route('businesses.index'));
        }

        return view('businesses.edit')->with('businesses', $businesses);
    }

    /**
     * Update the specified businesses in storage.
     */
    public function update($id, UpdatebusinessesRequest $request)
    {
        $businesses = $this->businessesRepository->find($id);

        if (empty($businesses)) {
            Flash::error('Businesses not found');

            return redirect(route('businesses.index'));
        }

        $businesses = $this->businessesRepository->update($request->all(), $id);

        Flash::success('Businesses updated successfully.');

        return redirect(route('businesses.index'));
    }

    /**
     * Remove the specified businesses from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $businesses = $this->businessesRepository->find($id);

        if (empty($businesses)) {
            Flash::error('Businesses not found');

            return redirect(route('businesses.index'));
        }

        $this->businessesRepository->delete($id);

        Flash::success('Businesses deleted successfully.');

        return redirect(route('businesses.index'));
    }
}
