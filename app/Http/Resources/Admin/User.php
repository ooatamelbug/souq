<?php

namespace App\Http\Resources\Admin;

use Illuminate\Http\Resources\Json\JsonResource;
use App\products;

class User extends JsonResource
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
          'firstname' => $this->name,
          'lastname' => $this->lastname,
          'country' => $this->country,
          //'product' => User::find($this->id)->product
        ];
    }
}
