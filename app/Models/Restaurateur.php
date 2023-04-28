<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Restaurateur extends Model
{
    public function restaurant(): HasOne
    {
        return $this->hasOne(Restaurant::class);
    }
}
