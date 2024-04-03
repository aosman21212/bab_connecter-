<?php

namespace App\Repositories;

use App\Models\permissions;
use App\Repositories\BaseRepository;

class permissionsRepository extends BaseRepository
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
        return permissions::class;
    }
}
