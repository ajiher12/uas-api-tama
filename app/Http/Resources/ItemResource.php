<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ItemResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        
        return [
            'id' =>     $this->id,
            'product_name' => $this->product_name,
            'brand' => $this->brand,
            'price' => $this->price,
            'model_no' => $this->model_no,
        ];
    }

   
}
