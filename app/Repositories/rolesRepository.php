<?php

namespace App\Repositories;

use App\Models\roles;
use App\Repositories\BaseRepository;

class rolesRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'name',
        'guard_name'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return roles::class;
    }
}
