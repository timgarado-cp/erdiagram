<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Manufacturer extends Model
{
    use HasFactory;

    public function drug() : HasMany
    {
        return $this->hasMany(Drug::class);
    }

    public function contract() : HasMany
    {
        return $this->hasMany(Contract::class);
    }
}
