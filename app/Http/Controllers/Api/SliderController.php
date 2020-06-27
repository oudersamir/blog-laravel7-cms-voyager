<?php

namespace App\Http\Controllers\Api;
use App\Http\Resources\SlidesResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Slide;
class SliderController extends Controller
{
    public function getAllSlides($limit=null){
    	if($limit!=null and $limit >0){		
		return SlidesResource::collection(Slide::take($limit)->get());
    	}

    	return SlidesResource::collection(Slide::all());
    }
     public function getSlider($slug){

    	return new SlidesResource(Slide::whereSlug('slug',$slug)->first());
    }
}
