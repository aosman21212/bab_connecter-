<?php

namespace App\Repositories;

use App\Models\channelsbusiness;
use App\Repositories\BaseRepository;

class channelsbusinessRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'business_id',
        'channel_id',
        'business_contact_id'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return channelsbusiness::class;
    }
}
