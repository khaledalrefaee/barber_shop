<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Social_Media extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function salon(){
        return $this->belongsTo(Salon::class,'salon_id');
    }
}
