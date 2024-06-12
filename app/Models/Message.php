<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
class Message extends Model implements HasMedia
{
    use HasFactory,InteractsWithMedia;
    protected $fillable = [
        'description',
        'ticket_id'

    ];

    public function ticket(){
        return $this->belongsTo(Ticket::class);
    }
}
