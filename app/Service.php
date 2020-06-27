<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public static  function whereSlug($name,$slug){
    return Service::where($name,$slug);
    }
}
