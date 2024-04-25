<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class article extends Model
{
    use HasFactory;


    public function avisbureau() : HasMany{
        return $this->hasMany(avisBureau::class);
    }
}
