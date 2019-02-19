<?php

namespace App\Http\Resources;

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
          'date' => $this->created_at,
          'country' => $this->country,
          'email' => $this->email,
          'group' => $this->Ugroup,
          //'product' => products::where('foruser',$this->id)->get()
          'product' => User::find($this->id)->product
        ];
    }
}
