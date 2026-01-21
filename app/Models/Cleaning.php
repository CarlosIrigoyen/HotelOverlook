<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cleaning extends Model
{
    protected $fillable = [
        'room_id',
        'cleaned_by',
        'cleaning_start',
        'cleaning_end',
        'status',
        'notes'
    ];

    protected $casts = [
        'cleaning_start' => 'datetime',
        'cleaning_end' => 'datetime',
    ];

    public function room(): BelongsTo
    {
        return $this->belongsTo(Room::class);
    }

    public function cleaner(): BelongsTo
    {
        return $this->belongsTo(User::class, 'cleaned_by');
    }

    public function isInProgress(): bool
    {
        return $this->status === 'in_progress';
    }
}