<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    public function address()
    {
        return $this->belongsTo(Address::class);
    }

    public function position()
    {
        return $this->hasMany(Position::class);
    }

    public function user()
    {
        return $this->belongsToMany(User::class, 'users_companies', 'companies_id', 'users_id');
    }
}
