<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class channels extends Model
{
    public $table = 'channels';

    public $fillable = [
        'channel_name'
    ];

    protected $casts = [
        'channel_name' => 'string'
    ];

    public static array $rules = [
        'channel_name' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function channelsBusinesses(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\ChannelsBusiness::class, 'channel_id');
    }

    public function conversations(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Conversation::class, 'channel_id');
    }
}
