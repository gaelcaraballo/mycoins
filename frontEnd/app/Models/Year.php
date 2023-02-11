<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
    use HasFactory;

    protected $table = "years";
    public $timestamps = true;

    public function coin()
    {
        return $this->belongsTo(Year::class);
    }
}
