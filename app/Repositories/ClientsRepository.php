<?php

namespace App\Repositories;

use App\Models\Clients;
use App\Repositories\BaseRepository;

class ClientsRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'whatsapp',
        'facebook',
        'instagram',
        'gbm',
        'client_name',
        'language'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Clients::class;
    }
}
