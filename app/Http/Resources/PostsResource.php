<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostsResource extends JsonResource
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
                'categoryId'   =>$this->category_id,
                'titre'        =>$this->title,
                'slug'         =>$this->slug,
                'contenu'      =>$this->body,
                'description'  =>$this->excerpt,
                'image'        =>$this->image,
                'dateCreation' =>$this->created_at
        ];
    }
}
