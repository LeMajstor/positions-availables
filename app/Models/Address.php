<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    public function company()
    {
        return $this->belongsToMany(Company::class, 'addresses_companies', 'companies_id', 'addresses_id');
    }

    public function user()
    {
        return $this->belongsToMany(User::class, 'addresses_users', 'users_id', 'addresses_id');
    }
}
