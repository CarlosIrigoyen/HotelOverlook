<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Room extends Model
{
    protected $fillable = [
        'room_number',
        'room_type_id',
        'status',
        'notes'
    ];

    public function roomType(): BelongsTo
    {
        return $this->belongsTo(RoomType::class);
    }

    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class);
    }

    public function currentBooking(): HasOne
    {
        return $this->hasOne(Booking::class)
            ->where('status', 'checked_in')
            ->latest();
    }

    public function cleanings(): HasMany
    {
        return $this->hasMany(Cleaning::class);
    }

    public function currentCleaning(): HasOne
    {
        return $this->hasOne(Cleaning::class)
            ->where('status', 'in_progress')
            ->latest();
    }

    public function isAvailableForBooking(): bool
    {
        return $this->status === 'available' && !$this->currentCleaning;
    }
}