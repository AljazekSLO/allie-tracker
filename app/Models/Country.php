<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function visits() {
        return $this->hasMany(Visit::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
