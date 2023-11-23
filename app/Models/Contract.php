<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Contract extends Model
{
    use HasFactory;
     /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
    ];

    public function pharmacy() : BelongsTo 
    {
        return $this->belongsTo(Pharmacy::class);
    }

    public function manufacturer() : BelongsTo 
    {
        return $this->belongsTo(Manufacturer::class);
    }
}
