<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
     public static  function whereSlug($name,$slug){
    return Slide::where($name,$slug);
    }
}
