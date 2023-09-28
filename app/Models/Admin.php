<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Traits\AutoGenerateRecId;

class Admin extends Authenticatable
{
    use HasFactory;
    use AutoGenerateRecId;

    protected $guarded = [];

    public function salon(){
        return $this->hasMany(Salon::class,'admin_id','id');
    }
}
