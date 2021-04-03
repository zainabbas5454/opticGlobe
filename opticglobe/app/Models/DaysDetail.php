<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaysDetail extends Model
{
    use HasFactory;

    public function Plans()
    {
        return $this->belongsTo(Plans::class);
    }

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
