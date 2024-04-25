<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\DB;

class Deliberation extends Model
{
    use HasFactory;

    protected $fillable = [
        'dateDelib',
        'objet',
        'numDelib',

    ];


   

    // public function anneebudgetaire() : BelongsTo {
    //     return $this->belongsTo(anneeBudgetaire::class);
    // }


}
