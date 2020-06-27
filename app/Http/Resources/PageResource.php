<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PageResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
         return [
                
                'titre'        =>$this->title,
                'slug'         =>$this->slug,
                'contenu'      =>$this->body,
                'description'  =>$this->description,
             
        ];
    }
}
