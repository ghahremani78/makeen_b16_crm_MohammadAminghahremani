<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Product extends Model implements HasMedia
{
    use HasFactory,InteractsWithMedia;

    protected $fillable =[
        'productname',
         'price',
         'memory',
         'operatingsystem',
         'color',
         'path_image',
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

    public function warranty(){
        return $this->hasOne(Warranty::class);
    }
    protected function ProductColor():Attribute{
        return new Attribute(
            get:fn()=>$this->productname.' '.$this->color
        );
    }


}
