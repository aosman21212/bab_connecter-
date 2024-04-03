<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateStctemplatesRequest;
use App\Http\Requests\UpdateStctemplatesRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\StctemplatesRepository;
use Illuminate\Http\Request;
use Flash;

class StctemplatesController extends AppBaseController
{
    /** @var StctemplatesRepository $stctemplatesRepository*/
    private $stctemplatesRepository;

    public function __construct(StctemplatesRepository $stctemplatesRepo)
    {
        $this->stctemplatesRepository = $stctemplatesRepo;
    }

    /**
     * Display a listing of the Stctemplates.
     */
    public function index(Request $request)
    {
        $stctemplates = $this->stctemplatesRepository->paginate(10);

        return view('stctemplates.index')
            ->with('stctemplates', $stctemplates);
    }

    /**
     * Show the form for creating a new Stctemplates.
     */
    public function create()
    {
        return view('stctemplates.create');
    }

    /**
     * Store a newly created Stctemplates in storage.
     */
    public function store(CreateStctemplatesRequest $request)
    {
        $input = $request->all();

        $stctemplates = $this->stctemplatesRepository->create($input);

        Flash::success('Stctemplates saved successfully.');

        return redirect(route('stctemplates.index'));
    }

    /**
     * Display the specified Stctemplates.
     */
    public function show($id)
    {
        $stctemplates = $this->stctemplatesRepository->find($id);

        if (empty($stctemplates)) {
            Flash::error('Stctemplates not found');

            return redirect(route('stctemplates.index'));
        }

        return view('stctemplates.show')->with('stctemplates', $stctemplates);
    }

    /**
     * Show the form for editing the specified Stctemplates.
     */
    public function edit($id)
    {
        $stctemplates = $this->stctemplatesRepository->find($id);

        if (empty($stctemplates)) {
            Flash::error('Stctemplates not found');

            return redirect(route('stctemplates.index'));
        }

        return view('stctemplates.edit')->with('stctemplates', $stctemplates);
    }

    /**
     * Update the specified Stctemplates in storage.
     */
    public function update($id, UpdateStctemplatesRequest $request)
    {
        $stctemplates = $this->stctemplatesRepository->find($id);

        if (empty($stctemplates)) {
            Flash::error('Stctemplates not found');

            return redirect(route('stctemplates.index'));
        }

        $stctemplates = $this->stctemplatesRepository->update($request->all(), $id);

        Flash::success('Stctemplates updated successfully.');

        return redirect(route('stctemplates.index'));
    }

    /**
     * Remove the specified Stctemplates from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $stctemplates = $this->stctemplatesRepository->find($id);

        if (empty($stctemplates)) {
            Flash::error('Stctemplates not found');

            return redirect(route('stctemplates.index'));
        }

        $this->stctemplatesRepository->delete($id);

        Flash::success('Stctemplates deleted successfully.');

        return redirect(route('stctemplates.index'));
    }
}
