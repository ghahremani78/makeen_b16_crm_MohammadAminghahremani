<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $fillable = [
        'subject',
        'status',
        'message_id',
        'user_id'
    ];

    public function medias(){
        return $this->hasMany(Media_table::class);
    }

    public function messages(){
        return $this->hasMany(Message::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
