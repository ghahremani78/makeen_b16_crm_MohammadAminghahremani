<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class label extends Model
{
    use HasFactory;
    protected $fillable = [
    'name'
    ];

    public function users(){
        return $this->morphedByMany(User::class,'laelable');
    }

    public function teams(){
        return $this->morphedByMany(Team::class,'labelable');
    }

    public function products(){
        return $this->morphedByMany(Product::class,'labelable');
    }
}
