<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class anneeBudgetaire extends Model
{
    use HasFactory;


    protected $fillable = [ 'libelle'];

    // public function deliberation() : HasMany{
    //     return $this->hasMany(Deliberation::class);
    // }

    public function avisbureau() : HasMany{
        return $this->hasMany(avisBureau::class);
    }
}
