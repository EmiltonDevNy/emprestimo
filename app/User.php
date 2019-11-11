<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Historic;
use App\Models\Phone;
use App\Models\Adress;
use App\Models\Balance;
use App\Models\BankAccount;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'dtnasc', 'cpf', 'city_nasc', 'state_nasc',  'country_nasc'
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

    public function bank_accounts()
    {
        return $this->hasMany(BankAccount::class);
    }
    public function adresses()
    {
        return $this->hasMany(Adress::class);
    }
    public function phones()
    {
        return $this->hasMany(Phone::class);
    }
    public function balances()
    {
        return $this->hasMany(Balance::class);
    }
    public function historics()
    {
        return $this->hasMany(Historic::class);
    }


}
