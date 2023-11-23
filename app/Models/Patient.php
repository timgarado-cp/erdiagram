<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Patient extends Model
{
    use HasFactory;

    public function prescribe() : BelongsToMany
    {
        return $this->belongsToMany(Prescribe::class);
    }

    public function seen() : BelongsToMany
    {
        return $this->belongsToMany(Seen::class);
    }
}
