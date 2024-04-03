<?php

namespace App\Repositories;

use App\Models\Conversations;
use App\Repositories\BaseRepository;

class ConversationsRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'conversation_id',
        'business_id',
        'channel_id',
        'client_id',
        'status'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Conversations::class;
    }
}
