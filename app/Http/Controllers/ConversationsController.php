<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateConversationsRequest;
use App\Http\Requests\UpdateConversationsRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\ConversationsRepository;
use App\Models\Conversation;

use Illuminate\Http\Request;
use Flash;

class ConversationsController extends AppBaseController
{
    /** @var ConversationsRepository $conversationsRepository*/
    private $conversationsRepository;

    public function __construct(ConversationsRepository $conversationsRepo)
    {
        $this->conversationsRepository = $conversationsRepo;
    }

    /**
     * Display a listing of the Conversations.
     */
    public function index(Request $request)
    {
        $conversations = $this->conversationsRepository->paginate(50);

        return view('conversations.index')
            ->with('conversations', $conversations);
    }

    /**
     * Show the form for creating a new Conversations.
     */
    public function create()
    {

        $businesses = \App\Models\Businesses::pluck('business_name', 'id');
        $channels = \App\Models\channels::pluck('channel_name', 'id');
        $Clients = \App\Models\Clients::pluck('client_name', 'id');
        return view('conversations.create',compact('businesses', 'channels','Clients'));
    }

    /**
     * Store a newly created Conversations in storage.
     */
    public function store(CreateConversationsRequest $request)
    {
        $input = $request->all();

        $conversations = $this->conversationsRepository->create($input);

        Flash::success('Conversations saved successfully.');

        return redirect(route('conversations.index'));
    }

    /**
     * Display the specified Conversations.
     */
    public function show($id)
    {
        $conversations = $this->conversationsRepository->find($id);

        if (empty($conversations)) {
            Flash::error('Conversations not found');

            return redirect(route('conversations.index'));
        }

        return view('conversations.show')->with('conversations', $conversations);
    }

    /**
     * Show the form for editing the specified Conversations.
     */
/**
 * Show the form for editing the specified Conversations.
 */
public function edit($id)
{
    $conversations = $this->conversationsRepository->find($id);
    
    if (empty($conversations)) {
        Flash::error('Conversations not found');
        return redirect(route('conversations.index'));
    }
    
    $businesses = \App\Models\Businesses::pluck('business_name', 'id');
    $channels = \App\Models\channels::pluck('channel_name', 'id'); // Corrected model name to Channel
    $Clients = \App\Models\Clients::pluck('client_name', 'id');
    return view('conversations.edit', compact('conversations', 'businesses', 'channels', 'Clients'));
}

    

    /**
     * Update the specified Conversations in storage.
     */
    public function update($id, UpdateConversationsRequest $request)
    {
        $conversations = $this->conversationsRepository->find($id);

        if (empty($conversations)) {
            Flash::error('Conversations not found');

            return redirect(route('conversations.index'));
        }

        $conversations = $this->conversationsRepository->update($request->all(), $id);

        Flash::success('Conversations updated successfully.');

        return redirect(route('conversations.index'));
    }

    /**
     * Remove the specified Conversations from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $conversations = $this->conversationsRepository->find($id);

        if (empty($conversations)) {
            Flash::error('Conversations not found');

            return redirect(route('conversations.index'));
        }

        $this->conversationsRepository->delete($id);

        Flash::success('Conversations deleted successfully.');

        return redirect(route('conversations.index'));
    }

    public function showChatbotConversations()
    {
        $conversations = conver::where('status', '=', '1') // Filter bot conversations
            ->orderBy('created_at', 'desc') // Order by creation date
            ->paginate(10); // Paginate results

        return view('conversations.chatbot', compact('conversations'));
    }
}
