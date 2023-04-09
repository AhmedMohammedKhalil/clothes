<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Company extends Authenticatable
{
    use HasFactory;
    protected $guard = 'company';

    protected $fillable = [
        'name', 'email','phone','address','password','image','owner','details',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
    ];

    public function products() {
        return $this->hasMany(Product::class,'company_id');
    }

}
