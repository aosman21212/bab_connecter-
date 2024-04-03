<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMessagesRequest;
use App\Http\Requests\UpdateMessagesRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\MessagesRepository;
use Illuminate\Http\Request;
use Flash;
use Auth;

class MessagesController extends AppBaseController
{
    /** @var MessagesRepository $messagesRepository*/
    private $messagesRepository;

    public function __construct(MessagesRepository $messagesRepo)
    {
        $this->messagesRepository = $messagesRepo;
    }

    /**
     * Display a listing of the Messages.
     */  
    public function index(Request $request)
    {
        // Get the currently authenticated user
        $user = Auth::user();
    
        // Get the default conversation ID from the user model
        $conversation_id = $user->conversation_id;
    
        // Retrieve paginated messages for the specified conversation ID
        $messages = $this->messagesRepository->findByConversation($conversation_id);
    
        // Return the messages to the view
        return view('messages.index')->with('messages', $messages);
    }
    /**
     * Show the form for creating a new Messagesa.
     */
    public function create()
    {
        return view('messages.create');
    }

    /**
     * Store a newly created Messages in storage.
     */
    public function store(CreateMessagesRequest $request)
    {
        $input = $request->all();

        $messages = $this->messagesRepository->create($input);

        Flash::success('Messages saved successfully.');

        return redirect(route('messages.index'));
    }

    /**
     * Display the specified Messages.
     */
    public function show($id)
    {
        $messages = $this->messagesRepository->find($id);

        if (empty($messages)) {
            Flash::error('Messages not found');

            return redirect(route('messages.index'));
        }

        return view('messages.show')->with('messages', $messages);
    }

    /**
     * Show the form for editing the specified Messages.
     */
    public function edit($id)
    {
        $messages = $this->messagesRepository->find($id);

        if (empty($messages)) {
            Flash::error('Messages not found');

            return redirect(route('messages.index'));
        }

        return view('messages.edit')->with('messages', $messages);
    }

    /**
     * Update the specified Messages in storage.
     */
    public function update($id, UpdateMessagesRequest $request)
    {
        $messages = $this->messagesRepository->find($id);

        if (empty($messages)) {
            Flash::error('Messages not found');

            return redirect(route('messages.index'));
        }

        $messages = $this->messagesRepository->update($request->all(), $id);

        Flash::success('Messages updated successfully.');

        return redirect(route('messages.index'));
    }

    /**
     * Remove the specified Messages from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $messages = $this->messagesRepository->find($id);

        if (empty($messages)) {
            Flash::error('Messages not found');

            return redirect(route('messages.index'));
        }

        $this->messagesRepository->delete($id);

        Flash::success('Messages deleted successfully.');

        return redirect(route('messages.index'));
    }
}
