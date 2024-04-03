<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stcusers extends Model
{
    public $table = 'stc_users';

    public $fillable = [
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

    protected $casts = [
        'wfms_task_num' => 'string',
        'crm_order_num' => 'string',
        'wfms_order_num' => 'string',
        'can_send_location' => 'boolean',
        'can_confirm_order' => 'boolean',
        'survey_id' => 'string'
    ];

    public static array $rules = [
        'conversation_id' => 'required',
        'wfms_task_num' => 'required|string|max:255',
        'crm_order_num' => 'required|string|max:255',
        'wfms_order_num' => 'required|string|max:255',
        'can_send_location' => 'required|boolean',
        'can_select_time' => 'required',
        'can_cancel_order' => 'required',
        'can_confirm_order' => 'required|boolean',
        'survey_id' => 'nullable|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function conversation(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Conversation::class, 'conversation_id');
    }
}
