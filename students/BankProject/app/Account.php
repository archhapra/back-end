<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class account extends Model
{

   protected $fillable = [
        'account_number', 'user_id', 'account_type', 'amount', 'status'
    ];


    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
