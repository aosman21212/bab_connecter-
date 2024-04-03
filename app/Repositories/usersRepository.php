<?php

namespace App\Repositories;

use App\Models\users;
use App\Repositories\BaseRepository;

class usersRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'name',
        'email',
        'email_verified_at',
        'conversation_id',
        'password',
        'remember_token'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return users::class;
    }
}
