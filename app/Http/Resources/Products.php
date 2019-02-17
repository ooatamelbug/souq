<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
//use App\Http\Resource\Images as ImagesResource;
use App\User;
use App\Depart;
use App\Part;
use App\Http\Resources\User as UserResource;
use App\Http\Resources\Depart as DepartResource;
use App\Http\Resources\Part as PartResource;

class Products extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
      $user = User::find($this->foruser);
      $depart = Depart::find($this->fordepart);
       $part = Part::find($this->forpart);
         $user->name;
        //return parent::toArray($request);
        return [
          'id' => $this->id,
          'name' => $this->pro_name,
          'price' => $this->price,
          'date' => $this->created_at,
          'status' => $this->stat,
          //'images' => ImagesResource::collection(Image::find($this->imges)),
          'user' =>  $user->name,
          'depart' =>  $depart->title,
          'part' =>  $part->title,
          //'user' =>  new User::collection($this->whenLoaded('users')),
          //'depart' => new Depart::collection($this->whenLoaded('depart')),
          //'part' => new Part::collection($this->whenLoaded('product'))
          //'depart' => DepartResource::collection($this->depart),
          //'part' => PartResource::collection($this->part)
        ];
    }
}
