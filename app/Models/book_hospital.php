<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book_hospital extends Model
{
    // use HasFactory;
    // protected $table='book_hospitals';
    // protected $primaryKey='id';
    protected $fillable=['name','age','address','relation','phone','requirment','date'];
}
