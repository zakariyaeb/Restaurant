<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Table extends Model
{
  
    public function restaurant(): BelongsTo
    {
        return $this->belongsTo(Restaurant::class);
    }


    public function reservation(): HasOne
    {
        return $this->hasOne(Reservation::class);
    }



}
