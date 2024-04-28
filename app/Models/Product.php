<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function types(){
        return $this->hasMany(Type::class);
    }

    public function manufacturers(){
        return $this->hasMany(Manufacturer::class);
    }
}
