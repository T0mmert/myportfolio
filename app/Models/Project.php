<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title',
        'description',
        'image',
        'languages',
        'tools',
        'link',
        'is_featured'
    ];

    protected $casts = [
        'is_featured' => 'boolean',
    ];

    public function getLanguagesArrayAttribute()
    {
        return array_map('trim', explode(',', $this->languages));
    }

    public function getToolsArrayAttribute()
    {
        return array_map('trim', explode(',', $this->tools));
    }
}