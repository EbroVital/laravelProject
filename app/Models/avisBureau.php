<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @mixin IdeHelperavisBureau
 */
class avisBureau extends Model
{
    use HasFactory;


    protected $fillable = [
        'dateAvis',
        'montant',
        'libelle',
        'numero',
        'loi'
    ];


    public function anneebudgetaire() : BelongsTo {
        return $this->belongsTo(anneeBudgetaire::class);
    }
    public function entreprise() : BelongsTo {
        return $this->belongsTo(Entreprise::class);
    }
    public function section() : BelongsTo{
        return $this->belongsTo(section::class);
    }
    public function arrete() : BelongsTo{
        return $this->belongsTo(arrete::class);
    }
    public function article() : BelongsTo{
        return $this->belongsTo(article::class);
    }
    public function signataire() : BelongsTo{
        return $this->belongsTo(signataire::class);
    }
    public function loi() : BelongsTo{
        return $this->belongsTo(loi::class);
    }


}
