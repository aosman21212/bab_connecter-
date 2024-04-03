<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatechannelsbusinessRequest;
use App\Http\Requests\UpdatechannelsbusinessRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\channelsbusinessRepository;
use Illuminate\Http\Request;
use Flash;

class channelsbusinessController extends AppBaseController
{
    /** @var channelsbusinessRepository $channelsbusinessRepository*/
    private $channelsbusinessRepository;

    public function __construct(channelsbusinessRepository $channelsbusinessRepo)
    {
        $this->channelsbusinessRepository = $channelsbusinessRepo;
    }

    /**
     * Display a listing of the channelsbusiness.
     */
    public function index(Request $request)
    {
        $channelsbusinesses = $this->channelsbusinessRepository->paginate(10);

        return view('channelsbusinesses.index')
            ->with('channelsbusinesses', $channelsbusinesses);
    }

    /**
     * Show the form for creating a new channelsbusiness.
     */
    public function create()
    {
        $businesses = \App\Models\Businesses::pluck('business_name', 'id');
        $channels = \App\Models\channels::pluck('channel_name', 'id');
    
        return view('channelsbusinesses.create', compact('businesses', 'channels'));
    }

    /**
     * Store a newly created channelsbusiness in storage.
     */
    public function store(CreatechannelsbusinessRequest $request)
    {
        $input = $request->all();

        $channelsbusiness = $this->channelsbusinessRepository->create($input);

        Flash::success('Channelsbusiness saved successfully.');

        return redirect(route('channelsbusinesses.index'));
    }

    /**
     * Display the specified channelsbusiness.
     */
    public function show($id)
    {
        $channelsbusiness = $this->channelsbusinessRepository->find($id);

        if (empty($channelsbusiness)) {
            Flash::error('Channelsbusiness not found');

            return redirect(route('channelsbusinesses.index'));
        }

        return view('channelsbusinesses.show')->with('channelsbusiness', $channelsbusiness);
    }

    /**
     * Show the form for editing the specified channelsbusiness.
     */
 // Inside your controller method for loading the edit view
public function edit($id)
{
    $channelsbusiness = $this->channelsbusinessRepository->find($id);
    
    if (empty($channelsbusiness)) {
        Flash::error('Channelsbusiness not found');
        return redirect(route('channelsbusinesses.index'));
    }

    $businesses = \App\Models\Businesses::pluck('business_name', 'id');
    $channels = \App\Models\channels::pluck('channel_name', 'id');

    return view('channelsbusinesses.edit', compact('channelsbusiness', 'businesses', 'channels'));
}

    /**
     * Update the specified channelsbusiness in storage.
     */
    public function update($id, UpdatechannelsbusinessRequest $request)
    {
        $channelsbusiness = $this->channelsbusinessRepository->find($id);

        if (empty($channelsbusiness)) {
            Flash::error('Channelsbusiness not found');

            return redirect(route('channelsbusinesses.index'));
        }

        $channelsbusiness = $this->channelsbusinessRepository->update($request->all(), $id);

        Flash::success('Channelsbusiness updated successfully.');

        return redirect(route('channelsbusinesses.index'));
    }

    /**
     * Remove the specified channelsbusiness from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $channelsbusiness = $this->channelsbusinessRepository->find($id);

        if (empty($channelsbusiness)) {
            Flash::error('Channelsbusiness not found');

            return redirect(route('channelsbusinesses.index'));
        }

        $this->channelsbusinessRepository->delete($id);

        Flash::success('Channelsbusiness deleted successfully.');

        return redirect(route('channelsbusinesses.index'));
    }
}
