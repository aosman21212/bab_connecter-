<?php

namespace App\Repositories;

use App\Models\Stctemplates;
use App\Repositories\BaseRepository;

class StctemplatesRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'name',
        'stc_name',
        'parameters'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Stctemplates::class;
    }
}
