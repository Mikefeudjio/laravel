<?php

namespace App\Models;


use App\Models\image;
use App\Models\comment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class post extends Model
{
    use HasFactory;

   Protected $fillable = ['title ' , 'content' ];

   public function comments()
   {
       return $this->hasMany(comment::class);
   }
   public function image(){
       
    return $this->hasOne(image::class);
   }

}
