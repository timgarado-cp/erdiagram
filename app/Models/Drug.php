<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Drug extends Model
{
    use HasFactory;

    public function manufacturer() : BelongsTo
    {
        return $this->belongsTo(Manufacturer::class);
    }

    public function sell() : BelongsToMany
    {
        return $this->belongsToMany(Sell::class);
    }

    public function prescribe() : BelongsToMany
    {
        return $this->belongsToMany(Prescribe::class);
    }
}
