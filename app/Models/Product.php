<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
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
         'color',
         'brand_id'
    ];


    public function orders(){
        return $this->belongsToMany(Order::class);
    }

    public function brand(){
        return $this->belongsTo(Brand::class);
    }
    public function labels(){
        return $this->morphToMany(label::class,'labelable');
    }
    protected function ProductColor():Attribute{
        return new Attribute(
            get:fn()=>$this->productname.' '.$this->color
        );
    }


}
