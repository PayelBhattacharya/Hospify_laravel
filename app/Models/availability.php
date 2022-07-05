<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class availability extends Model
{
    protected $fillable=['ICU','VENTILATION','COVID_BED','NORMAL_BED','COVID_VACCINATION','CITY_SCAN','BLOOD_BANK','OXYGEN_AVALABILITY','email'];
}
