<?php

namespace App\Policies;

use App\User;
use App\Models\Balance;
use Illuminate\Auth\Access\HandlesAuthorization;

class BalancePolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function update(User $user, Balance $balance)
    {
        return $user->id ==$balance->user_id;
    }
}
