<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRedcrescentsRequest;
use App\Http\Requests\UpdateRedcrescentsRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\RedcrescentsRepository;
use Illuminate\Http\Request;
use Flash;

class RedcrescentsController extends AppBaseController
{
    /** @var RedcrescentsRepository $redcrescentsRepository*/
    private $redcrescentsRepository;

    public function __construct(RedcrescentsRepository $redcrescentsRepo)
    {
        $this->redcrescentsRepository = $redcrescentsRepo;
    }

    /**
     * Display a listing of the Redcrescents.
     */
    public function index(Request $request)
    {
        $redcrescents = $this->redcrescentsRepository->paginate(10);

        return view('redcrescents.index')
            ->with('redcrescents', $redcrescents);
    }

    /**
     * Show the form for creating a new Redcrescents.
     */
    public function create()
    {
        return view('redcrescents.create');
    }

    /**
     * Store a newly created Redcrescents in storage.
     */
    public function store(CreateRedcrescentsRequest $request)
    {
        $input = $request->all();

        $redcrescents = $this->redcrescentsRepository->create($input);

        Flash::success('Redcrescents saved successfully.');

        return redirect(route('redcrescents.index'));
    }

    /**
     * Display the specified Redcrescents.
     */
    public function show($id)
    {
        $redcrescents = $this->redcrescentsRepository->find($id);

        if (empty($redcrescents)) {
            Flash::error('Redcrescents not found');

            return redirect(route('redcrescents.index'));
        }

        return view('redcrescents.show')->with('redcrescents', $redcrescents);
    }

    /**
     * Show the form for editing the specified Redcrescents.
     */
    public function edit($id)
    {
        $redcrescents = $this->redcrescentsRepository->find($id);

        if (empty($redcrescents)) {
            Flash::error('Redcrescents not found');

            return redirect(route('redcrescents.index'));
        }

        return view('redcrescents.edit')->with('redcrescents', $redcrescents);
    }

    /**
     * Update the specified Redcrescents in storage.
     */
    public function update($id, UpdateRedcrescentsRequest $request)
    {
        $redcrescents = $this->redcrescentsRepository->find($id);

        if (empty($redcrescents)) {
            Flash::error('Redcrescents not found');

            return redirect(route('redcrescents.index'));
        }

        $redcrescents = $this->redcrescentsRepository->update($request->all(), $id);

        Flash::success('Redcrescents updated successfully.');

        return redirect(route('redcrescents.index'));
    }

    /**
     * Remove the specified Redcrescents from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $redcrescents = $this->redcrescentsRepository->find($id);

        if (empty($redcrescents)) {
            Flash::error('Redcrescents not found');

            return redirect(route('redcrescents.index'));
        }

        $this->redcrescentsRepository->delete($id);

        Flash::success('Redcrescents deleted successfully.');

        return redirect(route('redcrescents.index'));
    }
}
