<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Carbon\Carbon;

class Quesero extends Authenticatable
{
    use Notifiable;
    protected $fillable = [
        'name', 'lastname', 'email', 'password', 'curp', 'birth'
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getAgeAttribute()
    {
        return \Carbon\Carbon::parse($this->birth)->diff(Carbon::now())
        ->format('%y años');
         //->format('%y years, %m months and %d days');
    }

    public function getFullName()
    {
        return $this->lastname." ".$this->name;
    }
}