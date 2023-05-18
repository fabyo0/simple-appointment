<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Note extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'appointment_id', 'description'];

    public function appointment(): BelongsTo
    {
        return $this->belongsTo(Appointment::class);
    }

}
