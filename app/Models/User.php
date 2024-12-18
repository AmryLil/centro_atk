<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    // Sesuaikan tabel database dengan field login
    protected $table = 'users';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',    
        'email',    
        'password', 
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
