<?php

namespace App\Repositories;

use App\Models\media;
use App\Repositories\BaseRepository;

class mediaRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'message_id',
        'size',
        'url',
        'caption',
        'fileName',
        'mimeType',
        'pageCount',
        'title',
        'height',
        'seconds',
        'is_voice',
        'type'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return media::class;
    }
}
