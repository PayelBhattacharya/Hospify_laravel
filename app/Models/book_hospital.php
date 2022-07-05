<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book_hospital extends Model
{
    protected $fillable=['name','age','address','user_email','relation','phone','requirement','date','email'];
    // public $timestamps = false;
    // const UPDATED_AT = false;
}
