<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    // protected $table = "posts";
    // protected $primaryKey = "id";
    public $timestamps = true;
    // const CREATED_AT = 'create_at';
    // const UPDATE_AT = 'update_at';
    protected $fillable = ['title','type','regular_price'];

}
