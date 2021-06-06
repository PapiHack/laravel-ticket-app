<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'level',
        'resolve',
        'user_id',
    ];

    /**
     * Get the author of that ticket.
     */
    public function author()
    {
        return $this->belongsTo(User::class);
    }
}
