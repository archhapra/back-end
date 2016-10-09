<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'address', 'phone', 'branch', 'amount'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function accounts()
    {
        return $this->hasMany(Account::class);
    }

public function setAccounts()
{
    $this->accounts()->create(
        ['account_number'=>1234,
        'user_id'=>$this->id,
        'account_type'=>'savings',
        'amount'=>$this->amount,
        'status'=>'active']);
}

public function updateAcounts($columnName,$columnValue,$userId)
{
    $this->accounts()->where('user_id',$userId)->update([
        $columnName=>$columnValue]);
}

}

