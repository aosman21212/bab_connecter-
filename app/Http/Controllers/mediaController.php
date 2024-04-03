<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatemediaRequest;
use App\Http\Requests\UpdatemediaRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\mediaRepository;
use Illuminate\Http\Request;
use Flash;

class mediaController extends AppBaseController
{
    /** @var mediaRepository $mediaRepository*/
    private $mediaRepository;

    public function __construct(mediaRepository $mediaRepo)
    {
        $this->mediaRepository = $mediaRepo;
    }

    /**
     * Display a listing of the media.
     */
    public function index(Request $request)
    {
        $media = $this->mediaRepository->paginate(10);

        return view('media.index')
            ->with('media', $media);
    }

    /**
     * Show the form for creating a new media.
     */
    public function create()
    {
        $Messages = \App\Models\Messages::pluck('id', 'id');

        return view('media.create',compact('Messages'));
    }

    /**
     * Store a newly created media in storage.
     */
    public function store(CreatemediaRequest $request)
    {
        $input = $request->all();

        $media = $this->mediaRepository->create($input);

        Flash::success('Media saved successfully.');

        return redirect(route('media.index'));
    }

    /**
     * Display the specified media.
     */
    public function show($id)
    {
        $media = $this->mediaRepository->find($id);

        if (empty($media)) {
            Flash::error('Media not found');

            return redirect(route('media.index'));
        }

        return view('media.show')->with('media', $media);
    }

    /**
     * Show the form for editing the specified media.
     */
    public function edit($id)
    {
        $media = $this->mediaRepository->find($id);

        if (empty($media)) {
            Flash::error('Media not found');

            return redirect(route('media.index'));
        }

        return view('media.edit')->with('media', $media);
    }

    /**
     * Update the specified media in storage.
     */
    public function update($id, UpdatemediaRequest $request)
    {
        $media = $this->mediaRepository->find($id);

        if (empty($media)) {
            Flash::error('Media not found');

            return redirect(route('media.index'));
        }

        $media = $this->mediaRepository->update($request->all(), $id);

        Flash::success('Media updated successfully.');

        return redirect(route('media.index'));
    }

    /**
     * Remove the specified media from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $media = $this->mediaRepository->find($id);

        if (empty($media)) {
            Flash::error('Media not found');

            return redirect(route('media.index'));
        }

        $this->mediaRepository->delete($id);

        Flash::success('Media deleted successfully.');

        return redirect(route('media.index'));
    }
}
