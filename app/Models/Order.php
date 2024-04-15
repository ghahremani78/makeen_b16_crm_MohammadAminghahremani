<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Order extends Model
{

    use HasFactory;
    protected $fillable = [

        'paymenttype',
        'location',
        'codeposti',
        'transferee',
        'user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }


    public function products(){
        return $this->belongsToMany(Product::class);
    }
}
