<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Account extends Model
{
    use SoftDeletes;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'number', 'rib', 'balance', 'account_type_id', 'currency_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
    ];

    public function user() 
	{
		return $this->belongsTo('App\User');
    }

    public function currency() 
	{
		return $this->belongsTo('App\Currency');
    }
    
    public function type() 
	{
		return $this->belongsTo('App\AccountType');
	}
}
