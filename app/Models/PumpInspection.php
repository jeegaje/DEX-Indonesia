<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PumpInspection extends Model
{
    use HasFactory;

    public function pump(): BelongsTo
    {
        return $this->belongsTo(Pump::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}


