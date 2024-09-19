<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'level',
        'description',

    ];
    public function user()
    {
        return $this->belongsToMany(User::class);
    }
}
