<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use HasFactory;

    protected $fillable =[
        'productname',
         'price',
         'memory',
         'operatingsystem',
         'color'
    ];


    public function orders(){
        return $this->belongsToMany(Order::class);
    }

}
