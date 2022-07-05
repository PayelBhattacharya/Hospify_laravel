<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialist extends Model
{
    protected $fillable = ['hname', 'email','doctorname','doctoremail','doctorphone','specialist','date','updated_at','created_at'];
    protected $casts =['date'=>'array'];
}
