<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hoso extends Model
{
    use HasFactory;
    protected $table = "ntdhoso";
    protected $fillable = ['name', 'email','phone','filename','status','content'];
}
