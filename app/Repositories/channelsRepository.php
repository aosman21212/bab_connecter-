<?php

namespace App\Repositories;

use App\Models\channels;
use App\Repositories\BaseRepository;

class channelsRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'channel_name'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return channels::class;
    }
}
