<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable; 
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'civility', 'name', 'firstname', 'email', 'phone', 'login', 'password', 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function accounts() 
    {
        return $this->hasMany('App\Account');
    }

    public function beneficiaries() 
    {
        return $this->hasMany('App\Beneficiary');
    }

    public function phoneHidden()
    {
        return str_pad(substr($this->phone, -4), strlen($this->phone), '*', STR_PAD_LEFT);
    }
}
