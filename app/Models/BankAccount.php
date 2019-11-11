<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\User;

class BankAccount extends Model
{


    //retornar o usuário ao qual pertence a conta bancária -> many-to-one
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // public function manyToOne(){

    //     //para a controller de usuario
    //     $bank_account_number ='numero da conta';
    //     $bank_account = BankAccount::where('conta', $bank_account_number)->get()->first();
    //     echo "<b>{$bank_account->name}</b>";

    //     $user = $bank_account->user;
    //     echo "<br>Pais: {$user->name}";

    // }

}
