<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;


class Media extends Model {
    use HasFactory;
    protected $fillable = [
        'file_name',
        'size',
        'path',
        'ext',
        'ticket_id'
    ];

    public function ticket(){
        return $this->belongsTo(Ticket::class);
    }


}

