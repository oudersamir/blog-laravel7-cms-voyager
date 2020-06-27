<?php

namespace App\Http\Controllers\Api;
use App\Page;
use App\Http\Resources\PageResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //

    public function getPage($slug){
    	$page=Page::whereSlug($slug)->first();
    return new PageResource($page);
    }
}
