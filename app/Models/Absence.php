<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Absence extends Model
{
    protected $fillable = [
        'type', 'date', 'first', 'second', 'user_id', 'created_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function first()
    {
        return $this->hasOne(First::class);
    }

    public function second()
    {
        return $this->hasOne(Second::class);
    }
}
