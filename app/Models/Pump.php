<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pump extends Model
{
    use HasFactory;

    public function pumpInspections(): HasMany
    {
        return $this->hasMany(PumpInspection::class);
    }
}
