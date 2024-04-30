<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class signataire extends Model
{
    use HasFactory, SoftDeletes;

    public function avisbureau(): HasMany{
        return $this->hasMany(avisBureau::class);
    }

    protected $fillable = [
        'Noms',
        'qualite',
    ];
}
