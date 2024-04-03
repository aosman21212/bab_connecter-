<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatechannelsRequest;
use App\Http\Requests\UpdatechannelsRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\channelsRepository;
use Illuminate\Http\Request;
use Flash;

class channelsController extends AppBaseController
{
    /** @var channelsRepository $channelsRepository*/
    private $channelsRepository;

    public function __construct(channelsRepository $channelsRepo)
    {
        $this->channelsRepository = $channelsRepo;
    }

    /**
     * Display a listing of the channels.
     */
    public function index(Request $request)
    {
        $channels = $this->channelsRepository->paginate(10);

        return view('channels.index')
            ->with('channels', $channels);
    }

    /**
     * Show the form for creating a new channels.
     */
    public function create()
    {
        return view('channels.create');
    }

    /**
     * Store a newly created channels in storage.
     */
    public function store(CreatechannelsRequest $request)
    {
        $input = $request->all();

        $channels = $this->channelsRepository->create($input);

        Flash::success('Channels saved successfully.');

        return redirect(route('channels.index'));
    }

    /**
     * Display the specified channels.
     */
    public function show($id)
    {
        $channels = $this->channelsRepository->find($id);

        if (empty($channels)) {
            Flash::error('Channels not found');

            return redirect(route('channels.index'));
        }

        return view('channels.show')->with('channels', $channels);
    }

    /**
     * Show the form for editing the specified channels.
     */
    public function edit($id)
    {
        $channels = $this->channelsRepository->find($id);

        if (empty($channels)) {
            Flash::error('Channels not found');

            return redirect(route('channels.index'));
        }

        return view('channels.edit')->with('channels', $channels);
    }

    /**
     * Update the specified channels in storage.
     */
    public function update($id, UpdatechannelsRequest $request)
    {
        $channels = $this->channelsRepository->find($id);

        if (empty($channels)) {
            Flash::error('Channels not found');

            return redirect(route('channels.index'));
        }

        $channels = $this->channelsRepository->update($request->all(), $id);

        Flash::success('Channels updated successfully.');

        return redirect(route('channels.index'));
    }

    /**
     * Remove the specified channels from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $channels = $this->channelsRepository->find($id);

        if (empty($channels)) {
            Flash::error('Channels not found');

            return redirect(route('channels.index'));
        }

        $this->channelsRepository->delete($id);

        Flash::success('Channels deleted successfully.');

        return redirect(route('channels.index'));
    }
}
