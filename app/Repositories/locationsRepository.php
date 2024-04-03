<?php

namespace App\Repositories;

use App\Models\locations;
use App\Repositories\BaseRepository;

class locationsRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'message_id',
        'address',
        'latitude',
        'longitude',
        'name',
        'url'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return locations::class;
    }
}
