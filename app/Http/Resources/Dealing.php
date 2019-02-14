<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resource\Products as ProductsResource;

class Dealing extends JsonResource
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
          'from' => ProductsResource::collection(User::find($this->id)),
          'to' => ProductsResource::collection(User::find($this->id)),
          'cash' => $this->cash,
          'status' => $this->stat,
          'date' => $this->cearted_at,
        ];
    }
}
