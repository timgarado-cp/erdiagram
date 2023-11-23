<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Sell extends Model
{
    use HasFactory;

    public function pharmacy() : BelongsTo
    {
        return $this->belongsTo(Pharmacy::class);
    }

    public function drug() : BelongsTo
    {
        return $this->belongsTo(Drug::class);
    }
}
