<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'name', 'user_id', 'catchPhrase', 'bs',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
