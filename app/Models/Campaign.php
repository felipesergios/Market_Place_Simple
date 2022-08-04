<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    //use HasFactory;
    protected $fillable = [
        'id',
        'campaign_name',
        'campaing_product',
    ];
    public function products()
    {
        return $this->hasMany(Product::class,'product_campaing');
    }
    public function group()
    {
        return $this->belongsTo(Group::class,'id','group_campaing');
    }
}
 // A campanha tem vários produtos 
 // A campanha só tem um grupo atrelado a ela 
