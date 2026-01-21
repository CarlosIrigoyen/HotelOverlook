<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Service extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
        'type',
        'available'
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'available' => 'boolean'
    ];

    public function extraServices(): HasMany
    {
        return $this->hasMany(ExtraService::class);
    }
}