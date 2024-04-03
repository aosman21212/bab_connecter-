<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Businesses extends Model
{
    protected $table = 'businesses';

    protected $fillable = [
        'business_name',
        'username',
        'password',
        'business_phone',
        'provider',
        'token',
        'permanent_token',
        'bot_domain',
        'third_party',
        'third_party_verify_token'
    ];

    protected $casts = [
        'business_name' => 'string',
        'username' => 'string',
        'password' => 'string',
        'business_phone' => 'string',
        'provider' => 'string',
        'token' => 'string',
        'permanent_token' => 'string',
        'bot_domain' => 'string',
        'third_party' => 'string',
        'third_party_verify_token' => 'string'
    ];

    public static array $rules = [
        'business_name' => 'required|string|max:255',
        'username' => 'required|string|max:255',
        'password' => 'required|string|max:255',
        'business_phone' => 'nullable|string|max:255',
        'provider' => 'required|string|max:255',
        'token' => 'required|string|max:65535',
        'permanent_token' => 'nullable|string|max:65535',
        'bot_domain' => 'nullable|string|max:255',
        'third_party' => 'nullable|string|max:255',
        'third_party_verify_token' => 'nullable|string|max:65535',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function channelsBusinesses(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\ChannelsBusiness::class, 'business_id');
    }

    public function conversations(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Conversations::class, 'business_id');
    }

    // Override the setPasswordAttribute method to automatically hash the password before saving
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }
}
