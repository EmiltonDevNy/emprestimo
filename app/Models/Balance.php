<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Loan;

class Balance extends Model
{


    public function loans()
    {
        return $this->hasMany(Loan::class);
    }

}
