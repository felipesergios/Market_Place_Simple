<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    //use HasFactory;
    protected $fillable = [
        'group_name',
        'group_campaing',
    ];
    public function cities()
    {
        return $this->hasMany(City::class ,'id');
    }
    public function campain()
    {
        return $this->belongsTo(Campaign::class,'group_campaing','id');
    }
}

// Um grupo pode ter várias cidades 
// Só pode ter um campanha 
