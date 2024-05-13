<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Order extends Model
{

    use HasFactory;
    protected $fillable = [
        'status',
        'totalAmount',
        'paymenttype',
        'location',
        'codeposti',
        'transferee',
        'description',
        'user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }


    public function products(){
        return $this->belongsToMany(Product::class);
    }

    protected static function booted()
{
    static::saved(function ($order) {
        $totalAmount = $order->products()->sum('price');
        $order->totalAmount = $totalAmount;
        $order->saveQuietly(); 
    });
}

    protected function StatusLocation():Attribute{
        return new Attribute(
            get:fn()=>$this->status.' '.$this->location
        );
    }

}
