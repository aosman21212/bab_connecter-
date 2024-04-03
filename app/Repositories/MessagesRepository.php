<?php

namespace App\Repositories;

use App\Models\Messages;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\DB;

class MessagesRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'conversation_id',
        'send_by_id',
        'send_by_type',
        'type',
        'message_id',
        'tracking_info',
        'message',
        'title',
        'media_id',
        'media_type',
        'error_code',
        'error_message',
        'send_to_3rd',
        'send_to_3rd_code',
        'send_at',
        'delivered_at',
        'read_at'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Messages::class;
    }

    public function findByUserAndConversation($userId, $conversationId)
    {
        // Retrieve messages where conversation_id matches and send_by_id matches user id
        return $this->model->where('id', $userId)
                           ->where('conversation_id', $conversationId)
                           ->whereExists(function ($query) use ($userId, $conversationId) {
                                $query->select(DB::raw(1))
                                      ->from('users')
                                      ->where('id', $userId)
                                      ->where('conversation_id', $conversationId);
                           })
                           ->get();
    }
    

       /**
     * Get all messages with the given conversation ID.
     *
     * @param int $conversationId
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function findByConversation($conversationId)
    {
        // Retrieve messages where conversation_id matches the provided conversation ID and paginate the results
        return $this->model->where('conversation_id', $conversationId)->paginate(200);
    }
}
