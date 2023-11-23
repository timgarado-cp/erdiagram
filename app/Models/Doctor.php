<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Doctor extends Model
{
    use HasFactory;

    public function seen() : BelongsToMany
    {
        return $this->belongsToMany(Seen::class);
    }

    public function prescribe() : BelongsToMany
    {
        return $this->belongsToMany(Seen::class);
    }
}
