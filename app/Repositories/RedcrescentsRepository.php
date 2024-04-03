<?php

namespace App\Repositories;

use App\Models\Redcrescents;
use App\Repositories\BaseRepository;

class RedcrescentsRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'client_id',
        'conversation_id',
        'ticket_id',
        'ticket_id_new',
        'is_open'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Redcrescents::class;
    }
}
