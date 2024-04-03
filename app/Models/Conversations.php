<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Conversations extends Model
{
    public $table = 'conversations';

    public $fillable = [
        'conversation_id',
        'business_id',
        'channel_id',
        'client_id',
        'status'
    ];

    protected $casts = [
        'conversation_id' => 'string',
        'status' => 'string'
    ];

    public static array $rules = [
        'conversation_id' => 'nullable|string|max:255',
        'business_id' => 'required',
        'channel_id' => 'required',
        'client_id' => 'required',
        'status' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function business(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Businesses::class, 'business_id');
    }

    public function channel(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\channels::class, 'channel_id');
    }

    public function client(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Clients::class, 'client_id');
    }

    public function messages(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Messages::class, 'conversation_id');
    }

    public function redCrescents(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Redcrescents::class, 'conversation_id');
    }

    public function stcUsers(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Stcusers::class, 'conversation_id');
    }
}
