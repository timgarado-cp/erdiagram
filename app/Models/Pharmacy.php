<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Pharmacy extends Model
{
    use HasFactory;

    public function work() : BelongsToMany
    {
        return $this->belongsToMany(Work::class);
    }

    public function sell() : BelongsToMany
    {
        return $this->belongsToMany(Sell::class);
    }

    public function contract() : BelongsToMany
    {
        return $this->belongsToMany(Contract::class);
    }
}
