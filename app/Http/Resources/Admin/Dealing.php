<?php

namespace App\Http\Resources\Admin;

use Illuminate\Http\Resources\Json\JsonResource;

use App\Http\Resources\Admin\Products as ProductsResource;

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
        'from' =>new ProductsResource(Dealing::find($this->id)->productF),
        'to' =>new ProductsResource(Dealing::find($this->id)->productT),
        'cash' => $this->cash,
        'status' => $this->stat,
        'date' => $this->created_at,
      ];
    }
}
