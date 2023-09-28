<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salon extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function added(){
        return $this->belongsTo(Admin::class,'admin_id');
    }

    public function updatedby(){
        return $this->belongsTo(Admin::class,'updated_by');
    }

    public function addres(){
        return $this->belongsTo(Addres::class,'address_id');
    }

    public function cat(){
        return $this->belongsTo(Category::class,'categories_id');
    }

    public function location(){
        return $this->hasOne(Location::class);
    }

    public function social(){
        return $this->hasOne(Social_Media::class);
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
