<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Champions extends Model
{
    // use HasFactory;

    protected $fillable = [
        'name', 'image_url', 'detail'
    ];

    /**
     * Get the Roles for the Champion.
     */
    public function roles()
    {
        return $this->belongsToMany(Roles::class, 'champion_roles');
    }
}
