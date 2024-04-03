<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    public $table = 'clients';

    public $fillable = [
        'whatsapp',
        'facebook',
        'instagram',
        'gbm',
        'client_name',
        'language'
    ];

    protected $casts = [
        'whatsapp' => 'string',
        'facebook' => 'string',
        'instagram' => 'string',
        'gbm' => 'string',
        'client_name' => 'string',
        'language' => 'string'
    ];

    public static array $rules = [
        'whatsapp' => 'nullable|string|max:255',
        'facebook' => 'nullable|string|max:255',
        'instagram' => 'nullable|string|max:255',
        'gbm' => 'nullable|string|max:255',
        'client_name' => 'nullable|string|max:255',
        'language' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function conversations(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Conversation::class, 'client_id');
    }

    public function redCrescents(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\RedCrescent::class, 'client_id');
    }
}
