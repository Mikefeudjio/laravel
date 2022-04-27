<?php

namespace App\Models;

use\App\Models\comment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;

   Protected $fillable = ['title ' , 'content' ];

   public function comments()
   {
       return $this->hasMany(comment::class);
   }
}
