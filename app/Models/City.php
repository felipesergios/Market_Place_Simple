<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    //use HasFactory;
    protected $fillable =[
        'city_name',
        'city_simbol',
        'city_state',
        'city_group_id',
    ];
    public function group()
    {
        return $this->belongsTo(Group::class,'city_group_id','id');
    }
}

