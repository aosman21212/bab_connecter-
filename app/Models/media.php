<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class media extends Model
{
    public $table = 'media';

    public $fillable = [
        'message_id',
        'size',
        'url',
        'caption',
        'fileName',
        'mimeType',
        'pageCount',
        'title',
        'height',
        'seconds',
        'is_voice',
        'type'
    ];

    protected $casts = [
        'url' => 'string',
        'caption' => 'string',
        'fileName' => 'string',
        'mimeType' => 'string',
        'pageCount' => 'string',
        'title' => 'string',
        'height' => 'string',
        'seconds' => 'string',
        'is_voice' => 'boolean',
        'type' => 'string'
    ];

    public static array $rules = [
        'message_id' => 'required',
        'size' => 'required',
        'url' => 'required|string|max:255',
        'caption' => 'nullable|string|max:255',
        'fileName' => 'nullable|string|max:255',
        'mimeType' => 'required|string|max:255',
        'pageCount' => 'nullable|string|max:255',
        'title' => 'nullable|string|max:255',
        'height' => 'nullable|string|max:255',
        'seconds' => 'nullable|string|max:255',
        'is_voice' => 'nullable|boolean',
        'type' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function message(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Messages::class, 'message_id');
    }
}
