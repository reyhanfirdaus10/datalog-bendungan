<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datalog extends Model
{
    use HasFactory;
    protected $fillable = ["Timestamp", "TZ","PWR12V_State", "VNotch_2_mA"];
    public $timestamps = false;
}
