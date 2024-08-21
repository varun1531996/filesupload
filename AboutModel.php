<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutModel extends Model
{
     protected $table = 'about_models';
     const ABOUT_ENABLE = 'Enable';

     const ABOUT_DISABLE = 'Disable';

     public function getisActiveAttribute($value)
     {
         if ($value == 1) {
             return "Enable";
         }else{
             return "Disable";
         }
     }
 
     public function getimgUrlAttribute($value)
     {
         return asset(config('constants.about') . '' . $value);
     }

  
}
