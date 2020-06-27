<?php

namespace App\Http\Resources;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str;

class ServicesResource extends JsonResource
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
                'id'           =>$this->id,
                'titre'        =>$this->title,
                'slug'         =>$this->slug,
                'contenu'      =>$this->body,
                'description'  =>$this->description,
                'extrait'      =>Str::limit($this->description,80),
                'image'        =>asset('storage/'.$this->image),
                'dateCreation' =>$this->created_at
        ];
    }
}
