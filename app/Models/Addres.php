<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addres extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function salon(){
        return $this->hasMany(Salon::class,'categories_id','id');

    }
}
