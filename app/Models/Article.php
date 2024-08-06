<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Article extends Model
{
    use HasFactory;
    protected $fillable = ['categorie_id','name','description','price','stock','tva'];
    public function Categorie(): BelongsTo
    {
        return $this->belongsTo(Categorie::class);
    }
    
}
