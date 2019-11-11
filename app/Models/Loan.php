<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Parcel;

class Loan extends Model
{
    public function parcels()
    {
        return $this->hasMany(Parcel::class);
    }
}
