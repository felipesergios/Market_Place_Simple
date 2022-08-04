<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
   // use HasFactory;
   protected $fillable =[
    'discount_size',
    'discount_campaing',
   ];
   public function campaing()
   {
    return $this->belongsTo(Campaign::class ,'discount_campaing','id');
   }
}

