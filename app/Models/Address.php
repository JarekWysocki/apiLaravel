<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'street', 'user_id', 'suite', 'city', 'zipcode', 'geo_lat', 'geo_lng',
    ];
    public function getFullAddressAttribute(): string
    {
        return $this->city . ' ' . $this->zipcode . ',' . $this->street . ' ' . $this->suite;
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
