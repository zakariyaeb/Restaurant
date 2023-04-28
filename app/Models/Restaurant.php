<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Restaurant extends Model
{
    public function reservation(): HasMany
    {
        return $this->hasMany(Reservation::class);
    }

    public function table(): HasMany
    {
        return $this->hasMany(Table::class);
    }

    public function restaurateur(): BelongsTo
    {
        return $this->belongsTo(Restaurateur::class);
    }

}
