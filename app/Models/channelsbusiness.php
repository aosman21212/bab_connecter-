<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class channelsbusiness extends Model
{
    public $table = 'channels_businesses';

    public $fillable = [
        'business_id',
        'channel_id',
        'business_contact_id',
        'created_at', // Add 'created_at' to fillable
        'updated_at'  // Add 'updated_at' to fillable
    ];

    protected $casts = [
        'business_contact_id' => 'string'
    ];

    public static array $rules = [
        'business_id' => 'required',
        'channel_id' => 'required',
        'business_contact_id' => 'required|string|max:255',
        // Remove 'created_at' and 'updated_at' from the rules array
    ];

    public function business(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Businesses::class, 'business_id');
    }

    public function channel(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\channels::class, 'channel_id');
    }
}
