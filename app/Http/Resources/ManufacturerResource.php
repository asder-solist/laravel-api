<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ManufacturerResource extends JsonResource
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
            'name'=>$this->name,
            'numberOfProductsPerYear'=>$this->numberOfProductsPerYear,
            'timeOnMarket'=>$this->timeOnMarket,
            'blogs' =>$this->blogs,
        ];
    }
}
