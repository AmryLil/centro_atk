<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Login extends Authenticatable
{
    use HasFactory;

    protected $table = 'login';

    protected $fillable = [
        'nama',
        'email',
        'kata_sandi',
        'role',
    ];

    protected $hidden = [
        'kata_sandi',
    ];

    public function setPasswordAttribute($value)
    {
        $this->attributes['kata_sandi'] = bcrypt($value); 
    }
}

