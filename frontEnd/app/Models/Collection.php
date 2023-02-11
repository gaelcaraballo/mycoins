<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Collection extends Model
{
    protected $table = "collection";
    protected $fillable = ['coin_id', 'year', 'user_id'];

    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }

    public function coins()
    {
        return $this->hasMany(Coin::class);
    }
}

