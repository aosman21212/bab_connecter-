<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    public $table = 'messages';

    public $fillable = [
        'conversation_id',
        'send_by_id',
        'send_by_type',
        'type',
        'message_id',
        'tracking_info',
        'message',
        'title',
        'media_id',
        'media_type',
        'error_code',
        'error_message',
        'send_to_3rd',
        'send_to_3rd_code',
        'send_at',
        'delivered_at',
        'read_at'
    ];

    protected $casts = [
        'send_by_type' => 'string',
        'type' => 'string',
        'message_id' => 'string',
        'tracking_info' => 'string',
        'message' => 'string',
        'title' => 'string',
        'media_type' => 'string',
        'error_code' => 'string',
        'error_message' => 'string',
        'send_to_3rd' => 'boolean',
        'send_to_3rd_code' => 'string',
        'send_at' => 'string',
        'delivered_at' => 'string',
        'read_at' => 'string'
    ];

    public static array $rules = [
        'conversation_id' => 'required',
        'send_by_id' => 'required',
        'send_by_type' => 'required|string|max:255',
        'type' => 'required|string|max:255',
        'message_id' => 'required|string|max:255',
        'tracking_info' => 'nullable|string|max:255',
        'message' => 'nullable|string|max:65535',
        'title' => 'nullable|string|max:255',
        'media_id' => 'nullable',
        'media_type' => 'nullable|string|max:255',
        'error_code' => 'nullable|string|max:255',
        'error_message' => 'nullable|string|max:255',
        'send_to_3rd' => 'nullable|boolean',
        'send_to_3rd_code' => 'nullable|string|max:65535',
        'send_at' => 'nullable|string|max:255',
        'delivered_at' => 'nullable|string|max:255',
        'read_at' => 'nullable|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function conversation(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Conversations::class, 'conversation_id');
    }

    public function locations(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\locations::class, 'message_id');
    }

    public function media(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\media::class, 'message_id');
    }
}
