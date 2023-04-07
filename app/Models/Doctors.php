<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctors extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $table = 'doctors';

    protected $fillable = [
        'name',
        'email',        
        'password',
        'provider_id',
        'is_active'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $primaryKey = 'id';
    public $timestamps = true;
    const CREATED_AT ='created_at';
    const UPDATED_AT ='updated_at';
}
 