<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'data',
        'time',
    ];
    public function grouplist()
    {
    return $this->belongsToMany(User::class);
    }
}
