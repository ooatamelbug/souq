<?php

namespace App\Http\Resources\Admin;

use Illuminate\Http\Resources\Json\JsonResource;
use App\User;
use App\Depart;
use App\Part;
use App\Http\Resources\Admin\User as UserResource;
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
        return [
          'id' => $this->id,
          'name' => $this->pro_name,
          'price' => $this->price,
          'date' => $this->created_at,
          //'images' => ImagesResource::collection(Image::find($this->imges)),
          'user' => new UserResource(products::find($this->id)->users),
          'depart' => new DepartResource(products::find($this->id)->depart),
          'part' => new PartResource( products::find($this->id)->part)
        ];
    }
}
