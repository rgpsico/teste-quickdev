<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Carbon;

class moviesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return[
            "id" =>$this['id'],
            'title'=>$this['title'],
            'overview'=>$this['overview'],
            'vote_average'=>$this['vote_average'],
            "release_date"=> $this['release_date'],
            "poster_path"=>$this['poster_path'],
            "genre_ids"=>
                ["genre"=>
                $this['genre_ids']
            ]
        ];
    }
}
