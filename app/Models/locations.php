<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class locations extends Model
{
    public $table = 'locations';

    public $fillable = [
        'message_id',
        'address',
        'latitude',
        'longitude',
        'name',
        'url'
    ];

    protected $casts = [
        'address' => 'string',
        'latitude' => 'string',
        'longitude' => 'string',
        'name' => 'string',
        'url' => 'string'
    ];

    public static array $rules = [
        'message_id' => 'required',
        'address' => 'nullable|string|max:255',
        'latitude' => 'required|string|max:255',
        'longitude' => 'required|string|max:255',
        'name' => 'nullable|string|max:255',
        'url' => 'nullable|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function message(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Message::class, 'message_id');
    }
}
