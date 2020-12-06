<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transfer extends Model
{
    use SoftDeletes;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'account_id', 'beneficiary_id', 'amount', 'permanent_order', 'permanent_first_date', 'pattern', 'status', 'request_ip'
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

    public function account() 
	{
		return $this->belongsTo('App\Account');
    }
    
    public function beneficiary() 
	{
		return $this->belongsTo('App\Beneficiary');
    }
}
