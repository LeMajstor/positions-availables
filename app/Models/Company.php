<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    public function position()
    {
        return $this->hasMany(Position::class);
    }

    public function address()
    {
        return $this->belongsToMany(Address::class, 'addresses_users', 'addresses_id', 'companies_id');
    }

    public function user()
    {
        return $this->belongsToMany(User::class, 'users_companies', 'users_id', 'companies_id');
    }
}
