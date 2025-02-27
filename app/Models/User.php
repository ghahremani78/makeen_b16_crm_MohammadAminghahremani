<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class User extends Authenticatable implements HasMedia
{
    use HasApiTokens, HasFactory, Notifiable,HasRoles,InteractsWithMedia;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'phoneNumber',
        'email',
        'password',
        'first_name',
        'last_name',
        'team_id',

    ];
    protected $appends = [
        "full_name"
    ];



    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function orders(){
     return $this->hasMany(Order::class);
    }

    public function team(){
        return $this->belongsTo(Team::class);
    }

    public function ticket(){
        return $this->hasMany(Ticket::class);
    }

    public function labels(){
        return $this->morphToMany(Label::class,'labelable');
    }

   // public function getFullNameAttribute(){
     //   return $this->first_name.' '.$this->last_name;
    //}

    protected function fullName():Attribute{
        return new Attribute(
            get:fn()=>$this->first_name.' '.$this->last_name
        );
    }



}
