<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ams extends Model
{
    protected $fillable = ['name', 'location','phone'];
}
