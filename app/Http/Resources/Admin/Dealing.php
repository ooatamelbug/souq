<?php

namespace App\Http\Resources\Admin;

use Illuminate\Http\Resources\Json\JsonResource;

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
        'from' => Dealing::find($this->id)->productF,
        'to' => Dealing::find($this->id)->productT,
        'cash' => $this->cash,
        'status' => $this->stat,
        'date' => $this->created_at,
      ];
    }
}
