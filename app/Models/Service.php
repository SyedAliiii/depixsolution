<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'image',
        'banner_image',
        'description',
        'features',
        'order',
        'is_active',
        'details_title',
        'details_description',
        'approach_title',
        'approach_description',
        'approach_image',
    ];

    public function processes()
    {
        return $this->hasMany(ServiceProcess::class)->orderBy('order', 'asc');
    }

    protected $casts = [
        'features' => 'array',
        'is_active' => 'boolean',
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('order', 'asc');
    }
}
