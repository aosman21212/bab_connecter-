<?php

namespace App\Repositories;

use App\Models\Stcusers;
use App\Repositories\BaseRepository;

class StcusersRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'conversation_id',
        'wfms_task_num',
        'crm_order_num',
        'wfms_order_num',
        'can_send_location',
        'can_select_time',
        'can_cancel_order',
        'can_confirm_order',
        'survey_id'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Stcusers::class;
    }
}
