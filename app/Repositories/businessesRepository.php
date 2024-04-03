<?php

namespace App\Repositories;

use App\Models\businesses;
use App\Repositories\BaseRepository;

class businessesRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'business_name',
        'username',
        'password',
        'business_phone',
        'provider',
        'token',
        'permanent_token',
        'bot_domain',
        'third_party',
        'third_party_verify_token'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return businesses::class;
    }
}
