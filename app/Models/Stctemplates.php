<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stctemplates extends Model
{
    public $table = 'stc_templates';

    public $fillable = [
        'name',
        'stc_name',
        'parameters'
    ];

    protected $casts = [
        'name' => 'string',
        'stc_name' => 'string',
        'parameters' => 'string'
    ];

    public static array $rules = [
        'name' => 'required|string|max:255',
        'stc_name' => 'required|string|max:255',
        'parameters' => 'required|string|max:65535',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
