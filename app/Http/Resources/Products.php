<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resource\Images as ImagesResource;
use App\Http\Resource\User as UserResource;
use App\Http\Resource\Depart as DepartResource;
use App\Http\Resource\Part as PartResource;

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
        //return parent::toArray($request);
        return [
          'id' => $this->id,
          'name' => $this->pro_name,
          'price' => $this->price,
          'date' => $this->created_at,
          'status' => $this->stat,
          'images' => ImagesResource::collection(Image::find($this->imges)),
          'user' => UserResource::collection(User::find($this->user)),
          'depart' => DepartResource::collection(Depart::find($this->depart)),
          'part' => PartResource::collection(Part::find($this->part))
        ];
    }
}
