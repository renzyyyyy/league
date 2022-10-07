<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    // use HasFactory;

    protected $fillable = [
        'role'
    ];

    public function champions()
    {
        return $this->belongsToMany(Champions::class, 'champion_roles');
    }
}
