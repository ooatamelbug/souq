<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
//use App\Http\Resource\Images as ImagesResource;
use App\User;
use App\Depart;
//use App\products;
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
        return [
          'id' => $this->id,
          'name' => $this->pro_name,
          'price' => $this->price,
          'date' => $this->created_at,
          'status' => $this->stat,
          //'images' => ImagesResource::collection(Image::find($this->imges)),
          'user' =>  products::find($this->id)->users,
          'depart' =>  products::find($this->id)->depart,
          'part' =>  products::find($this->id)->part
        ];
    }
}
