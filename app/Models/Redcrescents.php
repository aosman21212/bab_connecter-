<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Redcrescents extends Model
{
    public $table = 'red_crescents';

    public $fillable = [
        'client_id',
        'conversation_id',
        'ticket_id',
        'ticket_id_new',
        'is_open'
    ];

    protected $casts = [
        'ticket_id' => 'string',
        'ticket_id_new' => 'string',
        'is_open' => 'boolean'
    ];

    public static array $rules = [
        'client_id' => 'required',
        'conversation_id' => 'required',
        'ticket_id' => 'required|string|max:255',
        'ticket_id_new' => 'nullable|string|max:255',
        'is_open' => 'required|boolean',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function client(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Clients::class, 'client_id');
    }

    public function conversation(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Conversations::class, 'conversation_id');
    }
}
